package org.example;

import com.opencsv.CSVReader;
import com.opencsv.exceptions.CsvValidationException;
import org.xml.sax.SAXException;

import javax.xml.parsers.ParserConfigurationException;
import java.io.*;
import java.util.*;

public class Main {

    public static String dataDir = "../../data/";

    public static String CSV_FILE_PATH = dataDir + "products.csv";
    public static String IMAGE_PATH = dataDir + "images/";

    public static void main(String[] args)
            throws IOException, ParserConfigurationException, SAXException, ClassNotFoundException {
        Adder adder = new Adder();
        Map<String, Integer> productFeatureMap = new HashMap<>();
        productFeatureMap.put("manufacturer", 3);
        productFeatureMap.put("scale", 11);
        productFeatureMap.put("height", 6);
        productFeatureMap.put("hero", 2);
        productFeatureMap.put("theme", 1);
        productFeatureMap.put("series", 10);
        productFeatureMap.put("material", 9);
        productFeatureMap.put("packaging", 5);
        productFeatureMap.put("accessories", 7);
        productFeatureMap.put("range_of_motion", 8);
        productFeatureMap.put("type", 4);
        productFeatureMap.put("dimensions", 12);

        // Read the CSV file
        List<List<String>> csvData = readCsv(CSV_FILE_PATH);
        HashMap<String, String> attributeMap = HashMapSerializer.loadHashMap(dataDir + "attribute_map.ser");
        // Iterate over CSV rows (excluding header)
        for (int i = 1; i < csvData.size(); i++) {
            System.out.println("started " + i + "/" + csvData.size());
            // Start from 1 to skip header
            List<String> product = csvData.get(i);

            String imageUrls = product.get(21);

            String product_id = "";
            for (int count = 0; count < 2; count++) {
                product_id = adder.sendCreateRequest(createDefaultPayload(product, attributeMap, productFeatureMap));
                if (product_id != null) {
                    System.out.println("Product " + product_id + " successfuly added.");
                    break;
                }
            }
            if (product_id == null) {
                System.out.println("Product creation failed.");
                continue;
            }
            adder.sendModifyRequest(createStockPayload("100", product_id), product_id);
            System.out.println("Product with ID: " + product_id + " Stock updated successfully.");
            // Upload images for the product
            String[] imageFiles = imageUrls.split(",");
            for (String imageFile : imageFiles) {
                if (imageFile.length() < 2)
                    break;
                String imagePath = IMAGE_PATH + imageFile.trim();

                adder.uploadImage(product_id, imagePath);
            }
            System.out.println("Product with ID: " + product_id + " images added successfully.");
        }
    }

    // Function to read CSV file
    public static List<List<String>> readCsv(String filePath) throws IOException {

        List<List<String>> records = new ArrayList<List<String>>();
        try (CSVReader csvReader = new CSVReader(new FileReader(filePath));) {
            String[] values = null;
            while ((values = csvReader.readNext()) != null) {
                records.add(Arrays.asList(values));
            }
        } catch (CsvValidationException e) {
            throw new RuntimeException(e);
        }

        return records;
    }

    public static String createDefaultPayload(List<String> product, HashMap<String, String> attributeMap,
            Map<String, Integer> productFeatureMap) {
        StringBuilder xml = new StringBuilder();
        xml.append("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
                "<prestashop xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n" +
                "    <product>\n" +
                "        <name>\n" +
                "            <language id=\"1\"><![CDATA[" + product.get(2) + "]]></language> <!-- English -->\n" +
                "        </name>\n" +
                "        <price><![CDATA[" + product.get(4) + "]]></price>\n" +
                "        <id_category_default><![CDATA[" + product.get(3) + "]]></id_category_default>\n" +
                "        <state><![CDATA[1]]></state>\n" +
                "        <active><![CDATA[1]]></active>\n" +
                "        <available_for_order><![CDATA[1]]></available_for_order>\n" +
                "        <description>\n" +
                "            <language id=\"1\">\n" +
                "                <![CDATA[" + product.get(20) + "]]>\n" +
                "            </language>\n" +
                "        </description>\n" +
                "        <on_sale><![CDATA[" + product.get(5) + "]]></on_sale>\n" +
                "        <discount_amount><![CDATA[" + product.get(6) + "]]></discount_amount>\n" +
                "        <discount_percent><![CDATA[" + product.get(7) + "]]></discount_percent>\n" +
                "        <show_price><![CDATA[1]]></show_price>\n" +
                "         <id_tax_rules_group><![CDATA[1]]></id_tax_rules_group>\n" +
                "        <code><![CDATA[" + product.get(19) + "]]></code>\n" +
                "        <dimensions><![CDATA[" + product.get(22) + "]]></dimensions>\n" +
                "        <associations>\n" +
                "           <categories nodeType=\"category\" api=\"categories\">\n" +
                "                <category xlink:href=\"https://localhost/api/categories/ " + product.get(3) + " \">\n"
                +
                "                   <id><![CDATA[" + product.get(3) + "]]></id>\n" +
                "                </category>\n" +
                "            </categories>\n" +
                "            <product_features nodeType=\"product_feature\" api=\"product_features\">\n");
        String[] categories = {
                "manufacturer", "scale", "height", "hero", "theme",
                "series", "material", "packaging", "accessories", "range_of_motion", "type", "dimensions"
        };
        for (int i = 0; i < categories.length; i++) {
            String category = categories[i];
            String productValue = product.get(8 + i);
            if (i + 1 == categories.length)
                productValue = product.get(22);
            String mapKey = category + ":" + productValue;
            if (mapKey.endsWith("\n")) {
                mapKey = mapKey.substring(0, mapKey.length() - 1);
            }
            String attributeValue = attributeMap.getOrDefault(mapKey, "0");
            xml.append("                <product_feature>\n");
            xml.append("                    <id><![CDATA[").append(productFeatureMap.get(category))
                    .append("]]></id>\n");
            xml.append("                    <id_feature_value><![CDATA[").append(attributeValue)
                    .append("]]></id_feature_value>\n");
            xml.append("                </product_feature>\n");
        }
        xml.append("            </product_features>\n" + "        </associations>\n" + "    </product>\n"
                + "</prestashop>");
        return xml.toString();
    }

    public static String createStockPayload(String quantity, String product_id) {
        return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
                "<prestashop xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n" +
                "    <stock_available>\n" +
                "        <id><![CDATA[" + product_id + "]]></id>\n" +
                "        <id_product xlink:href=\"https://localhost/api/products/" + product_id + "\"><![CDATA["
                + product_id + "]]></id_product>\n" +
                "        <id_product_attribute><![CDATA[0]]></id_product_attribute>\n" +
                "        <id_shop xlink:href=\"https://localhost/api/shops/1\"><![CDATA[1]]></id_shop>\n" +
                "          <id_shop_group><![CDATA[0]]></id_shop_group>\n" +
                "        <quantity><![CDATA[" + quantity + "]]></quantity>\n" +
                "        <depends_on_stock><![CDATA[0]]></depends_on_stock>\n" +
                "        <out_of_stock><![CDATA[2]]></out_of_stock>\n" +
                "        <location><![CDATA[]]></location>\n" +
                "    </stock_available>\n" +
                "</prestashop>";
    }

}