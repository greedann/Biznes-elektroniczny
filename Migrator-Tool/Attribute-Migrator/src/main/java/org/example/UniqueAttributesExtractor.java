package org.example;

import org.apache.commons.csv.CSVFormat;
import org.apache.commons.csv.CSVParser;
import org.apache.commons.csv.CSVRecord;

import java.io.FileReader;
import java.io.IOException;
import java.io.Reader;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;
import java.util.Set;

public class UniqueAttributesExtractor {
    public static Map<String, Set<String>> readUniqueAttributes(String csvFilePath) throws IOException {
        Map<String, Set<String>> uniqueValues = new HashMap<>();

        String[] fields = { "manufacturer", "scale", "height", "hero", "theme", "series",
                "material", "packaging", "accessories", "range_of_motion", "type", "dimensions" };

        for (String field : fields) {
            uniqueValues.put(field, new HashSet<>());
        }

        try (Reader reader = new FileReader(csvFilePath);
                CSVParser csvParser = new CSVParser(reader, CSVFormat.DEFAULT.withFirstRecordAsHeader())) {

            for (CSVRecord record : csvParser) {
                for (String field : fields) {
                    String value = record.get(field);
                    if (value != null && !value.isEmpty()) {
                        String[] values = value.split(",");
                        for (String val : values) {
                            uniqueValues.get(field).add(val.trim());
                        }
                    }
                }
            }
        }
        return uniqueValues;
    }
}
