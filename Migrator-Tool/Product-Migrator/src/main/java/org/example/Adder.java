package org.example;

import okhttp3.*;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.NodeList;
import org.xml.sax.SAXException;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import java.io.ByteArrayInputStream;
import java.io.File;
import java.io.IOException;

public class Adder {
    public static String dataDir = "../../data/";

    public static String CSV_FILE_PATH = dataDir + "products.csv";
    public static String IMAGE_PATH = dataDir + "images/";

    public String sendCreateRequest(String xmlPayload) throws IOException, ParserConfigurationException, SAXException {

        OkHttpClient client = new OkHttpClient().newBuilder().build();
        MediaType mediaType = MediaType.parse("application/xml");
        RequestBody body = RequestBody.create(mediaType, xmlPayload);
        Request request = new Request.Builder()
                .url("http://localhost/api/products")
                .method("POST", body)
                .addHeader("Content-Type", "application/xml")
                .addHeader("Authorization", "Basic NlVLTTQyN0hNUTlaUEZMTVBHWllKOU1MRVdRQkk5QzM6")
                .addHeader("Cookie",
                        "PrestaShop-2d10789ffc94dcf356be68ac651f9d8e=def50200e3045eafc5fd4ad8e66228f233bec42606154e5d086ec924cdd63e24740d9111ace698b5e0c2a470bf3bb7cc56e77f3310d94f24b6d61cc2de48332615f63f8bb21265c4f4bdea933e005d69ddf7220b785d4e6e106bfc03f440a8ca845ea05ae0fead18ed4131b83637963b2b63620d8795fd3b2f0e6ccc957be1728e6ead69b922cb8878248261d7b36924b4b5b945a7cf591ee0f95f7e180a869c72c813c896f75d3aa8469bdedde51470cbc28c908b92dfd0d4c0fe6030df41f0e898f36ca737cb7d7e1e500059a8b52cab367f7c9b337e1481")
                .build();

        Response response = client.newCall(request).execute();
        String responseBody = response.body().string();
        response.close();

        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
        DocumentBuilder builder = factory.newDocumentBuilder();
        Document document = builder.parse(new ByteArrayInputStream(responseBody.getBytes()));

        NodeList productList = document.getElementsByTagName("stock_available");
        if (productList.getLength() > 0) {
            Element product = (Element) productList.item(0);
            String id = product.getElementsByTagName("id").item(0).getTextContent().trim();
            System.out.println("Product ID: " + id);
            return id;
        }
        System.out.println("No product element found.");
        return null;
    }

    public void sendModifyRequest(String xmlPayload, String product_id) throws IOException {
        OkHttpClient client = new OkHttpClient().newBuilder()
                .build();
        MediaType mediaType = MediaType.parse("application/xml");
        RequestBody body = RequestBody.create(mediaType, xmlPayload);
        Request request = new Request.Builder()
                .url("http://localhost/api/stock_availables/" + product_id)
                .method("PUT", body)
                .addHeader("Authorization", "Basic NlVLTTQyN0hNUTlaUEZMTVBHWllKOU1MRVdRQkk5QzM6")
                .addHeader("Cookie",
                        "PrestaShop-2d10789ffc94dcf356be68ac651f9d8e=def50200e3045eafc5fd4ad8e66228f233bec42606154e5d086ec924cdd63e24740d9111ace698b5e0c2a470bf3bb7cc56e77f3310d94f24b6d61cc2de48332615f63f8bb21265c4f4bdea933e005d69ddf7220b785d4e6e106bfc03f440a8ca845ea05ae0fead18ed4131b83637963b2b63620d8795fd3b2f0e6ccc957be1728e6ead69b922cb8878248261d7b36924b4b5b945a7cf591ee0f95f7e180a869c72c813c896f75d3aa8469bdedde51470cbc28c908b92dfd0d4c0fe6030df41f0e898f36ca737cb7d7e1e500059a8b52cab367f7c9b337e1481")
                .build();
        client.newCall(request).execute();
    }

    public void uploadImage(String productId, String imagePath) throws IOException {
        File imageFile = new File(imagePath);
        if (!imageFile.exists()) {
            System.err.println("Image file not found: " + imagePath);
            return;
        }
        OkHttpClient client = new OkHttpClient().newBuilder().build();
        RequestBody body = new MultipartBody.Builder().setType(MultipartBody.FORM)
                .addFormDataPart("image", imageFile.getName(),
                        RequestBody.create(MediaType.parse("application/octet-stream"), imageFile))
                .build();
        Request request = new Request.Builder()
                .url("http://localhost/api/images/products/" + productId)
                .method("POST", body)
                .addHeader("Authorization", "Basic NlVLTTQyN0hNUTlaUEZMTVBHWllKOU1MRVdRQkk5QzM6")
                .addHeader("Cookie",
                        "PrestaShop-2d10789ffc94dcf356be68ac651f9d8e=def50200e3045eafc5fd4ad8e66228f233bec42606154e5d086ec924cdd63e24740d9111ace698b5e0c2a470bf3bb7cc56e77f3310d94f24b6d61cc2de48332615f63f8bb21265c4f4bdea933e005d69ddf7220b785d4e6e106bfc03f440a8ca845ea05ae0fead18ed4131b83637963b2b63620d8795fd3b2f0e6ccc957be1728e6ead69b922cb8878248261d7b36924b4b5b945a7cf591ee0f95f7e180a869c72c813c896f75d3aa8469bdedde51470cbc28c908b92dfd0d4c0fe6030df41f0e898f36ca737cb7d7e1e500059a8b52cab367f7c9b337e1481")
                .build();
        Response response = client.newCall(request).execute();
        System.out
                .println("Image Response for Product " + productId + ": " + response.code() + " " + response.message());

        response.close();
        return;
    }

}
