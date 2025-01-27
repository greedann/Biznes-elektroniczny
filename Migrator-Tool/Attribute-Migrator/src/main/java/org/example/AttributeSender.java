package org.example;

import okhttp3.*;
import org.w3c.dom.Document;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;
import org.xml.sax.SAXException;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import java.io.*;
import java.util.*;

public class AttributeSender {
    private static final String API_URL = "https://localhost/api/product_feature_values";

    public static Map<String, String> sendAttributes(Map<String, Set<String>> uniqueAttributes,
            Map<String, Integer> productFeatureMap) throws Exception {
        Map<String, String> attributeMap = new HashMap<>();

        for (Map.Entry<String, Set<String>> entry : uniqueAttributes.entrySet()) {
            String field = entry.getKey();
            for (String value : entry.getValue()) {
                String xml = createXML(String.valueOf(productFeatureMap.get(field)), value);

                String response = sendRequest(API_URL, xml);
                String newId = extractAttributeId(response);

                attributeMap.put(field + ":" + value, newId);
                System.out.println("Saved: " + field + ":" + value + " -> " + newId);
            }
        }

        return attributeMap;
    }

    private static String createXML(String idFeature, String value) {
        return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
                "<prestashop xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n" +
                "  <product_feature_value>\n" +
                "    <id_feature><![CDATA[" + idFeature + "]]></id_feature>\n" +
                "    <custom><![CDATA[0]]></custom>\n" +
                "    <value><language id=\"1\"><![CDATA[" + value + "]]></language></value>\n" +
                "  </product_feature_value>\n" +
                "</prestashop>";
    }

    private static String sendRequest(String url, String xml)
            throws IOException, ParserConfigurationException, SAXException {
        OkHttpClient client = UnsafeOkHttpClient.getUnsafeOkHttpClient();
        MediaType mediaType = MediaType.parse("application/xml");
        RequestBody body = RequestBody.create(mediaType, xml);
        Request request = new Request.Builder()
                .url("https://localhost/api/product_feature_values")
                .method("POST", body)
                .addHeader("Content-Type", "application/xml")
                .addHeader("Authorization", "Basic NlVLTTQyN0hNUTlaUEZMTVBHWllKOU1MRVdRQkk5QzM6")
                .addHeader("Cookie",
                        "PrestaShop-2d10789ffc94dcf356be68ac651f9d8e=def50200e3045eafc5fd4ad8e66228f233bec42606154e5d086ec924cdd63e24740d9111ace698b5e0c2a470bf3bb7cc56e77f3310d94f24b6d61cc2de48332615f63f8bb21265c4f4bdea933e005d69ddf7220b785d4e6e106bfc03f440a8ca845ea05ae0fead18ed4131b83637963b2b63620d8795fd3b2f0e6ccc957be1728e6ead69b922cb8878248261d7b36924b4b5b945a7cf591ee0f95f7e180a869c72c813c896f75d3aa8469bdedde51470cbc28c908b92dfd0d4c0fe6030df41f0e898f36ca737cb7d7e1e500059a8b52cab367f7c9b337e1481")
                .build();
        Response response = client.newCall(request).execute();
        String responseBody = response.body().string();
        response.close();
        return responseBody;
    }

    private static String extractAttributeId(String xmlResponse) throws Exception {
        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
        DocumentBuilder builder = factory.newDocumentBuilder();
        InputStream inputStream = new ByteArrayInputStream(xmlResponse.getBytes("UTF-8"));
        Document document = builder.parse(inputStream);

        NodeList idNodes = document.getElementsByTagName("id");
        if (idNodes.getLength() > 0) {
            Node idNode = idNodes.item(0);
            return idNode.getTextContent().trim();
        }

        throw new Exception("ID not found in the XML response");
    }
}