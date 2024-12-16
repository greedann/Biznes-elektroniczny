package org.example;

import java.util.*;

import static org.example.AttributeSender.sendAttributes;

public class Main {
    public static String dataDir = "../../data/";
    public static String CSV_FILE_PATH = dataDir + "products.csv";
    public static String IMAGE_PATH = dataDir + "images/";

    public static void main(String[] args) throws Exception {
        Map<String, Set<String>> uniqueAttributes = UniqueAttributesExtractor
                .readUniqueAttributes(dataDir + "unique_values.csv");
        System.out.println("Unique attributes: " + uniqueAttributes);
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
        Map<String, String> attributeMap = sendAttributes(uniqueAttributes, productFeatureMap);
        HashMapSerializer.saveHashMap(new HashMap<>(attributeMap), dataDir + "attribute_map.ser");
    }
}
