package org.example;

import com.opencsv.CSVReader;
import com.opencsv.exceptions.CsvValidationException;
import okhttp3.*;
import org.xml.sax.SAXException;

import javax.xml.parsers.ParserConfigurationException;
import java.io.*;
import java.nio.file.*;
import java.util.*;

public class Main {

    public static String CSV_FILE_PATH = "data/products.csv";
    public static String IMAGE_PATH = "data/images/";

    public static void main(String[] args) throws IOException, ParserConfigurationException, SAXException {
        Adder adder = new Adder();
        // CSV file path


        // Read the CSV file
        List<List<String>> csvData = readCsv(CSV_FILE_PATH);

        // Iterate over CSV rows (excluding header)
        for (int i = 1; i < csvData.size(); i++) {
            System.out.println("started " + i + "/" + csvData.size());
            // Start from 1 to skip header
            List<String> product = csvData.get(i);

            // Extract product details
            String productId = product.get(0);
            String active = product.get(1);
            String name = product.get(2);
            String category = product.get(3);
            String price = product.get(4);
            String onSale = product.get(5);
            String discountAmount = product.get(6);
            String discountPercent = product.get(7);
            String manufacturer = product.get(8);
            String scale = product.get(9);
            String height = product.get(10);
            String hero = product.get(11);
            String theme = product.get(12);
            String series = product.get(13);
            String material = product.get(14);
            String packaging = product.get(15);
            String accessories = product.get(16);
            String rangeOfMotion = product.get(17);
            String type = product.get(18);
            String code = product.get(19);
            String description = product.get(20);
            String shortDescription = description.substring(0, 200);
            String imageUrls = product.get(21); // Comma-separated list of image files
           // Comma-separated list of image files

            // Create XML payload
//            String xmlPayload = createXmlPayload(productId, active, name, category, price, onSale, discountAmount, discountPercent,
//                    manufacturer, scale, height, hero, theme, series, material, packaging, accessories,
//                    rangeOfMotion, type, code, description, imageUrls);
            //String xmlPayload = createDefaultPayload(name, price, description, description);
            // Send the product request
            String product_id = adder.sendCreateRequest(createDefaultPayload(name, price, description, shortDescription));
            System.out.println("Product with ID: " + product_id + " created successfully.");
            if(product_id == null) {
                System.out.println("Product creation failed.");
                continue;
            }

            adder.sendModifyRequest(createStockPayload("10", product_id), product_id);
            System.out.println("Product with ID: " + product_id + " Stock updated successfully.");
            // Upload images for the product
            String[] imageFiles = imageUrls.split(",");
            for (String imageFile : imageFiles) {
                if(imageFile.length() < 2)
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


    public static String createDefaultPayload(String name, String price, String description, String descriptionShort) {
        return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
                "<prestashop xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n" +
                "    <product>\n" +
                "        <name>\n" +
                "            <language id=\"1\"><![CDATA[" + name + "]]></language> <!-- English -->\n" +
                "        </name>\n" +
                "        <price><![CDATA["+price+"]]></price>\n" +
                "        <id_category_default><![CDATA[2]]></id_category_default>\n" +
                "        <state><![CDATA[1]]></state>\n" +
                "        <active><![CDATA[1]]></active>\n" +
                "        <description>\n" +
                "            <language id=\"1\">\n" +
                "                <![CDATA[" + description + "]]>\n" +
                "            </language>\n" +
                "        </description>\n" +
                "        <description_short>\n" +
                "            <language id=\"1\">\n" +
                "                <![CDATA[" + descriptionShort + "]]>\n" +
                "            </language>\n" +
                "        </description_short>\n" +
                "    </product>\n" +
                "</prestashop>";
    }

    public static String createStockPayload(String quantity, String product_id) {
        return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
                "<prestashop xmlns:xlink=\"http://www.w3.org/1999/xlink\">\n" +
                "    <stock_available>\n" +
                "        <id><![CDATA["+ product_id+ "]]></id>\n" +
                "        <id_product xlink:href=\"https://localhost/api/products/" +product_id+ "\"><![CDATA["+product_id+"]]></id_product>\n" +
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

    // Function to send the product request
//    public int sendCreateRequest(String xmlPayload) throws IOException {
//
//
//        OkHttpClient client = new OkHttpClient().newBuilder().build();
//        MediaType mediaType = MediaType.parse("application/xml");
//        RequestBody body = RequestBody.create(mediaType, xmlPayload);
//
//        Request request = new Request.Builder()
//                .url("http://localhost/api/products")
//                .method("POST", body)
//                .addHeader("Content-Type", "application/xml")
//                .addHeader("Authorization", "Basic WU9VUktFWUhFUkU6") // Replace with your API credentials
//                .build();
//
//        Response response = client.newCall(request).execute();
//        System.out.println("Product Response: " + response.code() + " " + response.message());
//        response.close();
//        return 1;
//    }
//
//    public static void sendModifyRequest(String xmlPayload) throws IOException {
//        OkHttpClient client = new OkHttpClient().newBuilder()
//                .build();
//        MediaType mediaType = MediaType.parse("application/xml");
//        RequestBody body = RequestBody.create(mediaType, xmlPayload);
//                Request request = new Request.Builder()
//                .url("localhost/api/stock_availables/10")
//                .method("PUT", body)
//                .addHeader("Content-Type", "application/xml")
//                .addHeader("Authorization", "Basic WU9VUktFWUhFUkU6")
//                .build();
//        Response response = client.newCall(request).execute();
//    }

    // Function to upload an image

}