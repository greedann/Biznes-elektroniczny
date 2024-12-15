package org.example;

import java.io.*;
import java.util.HashMap;

public class HashMapSerializer {
    public static void saveHashMap(HashMap<String, String> map, String fileName) throws IOException {
        try (ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(fileName))) {
            oos.writeObject(map);
        }
    }

    public static HashMap<String, String> loadHashMap(String fileName) throws IOException, ClassNotFoundException {
        try (ObjectInputStream ois = new ObjectInputStream(new FileInputStream(fileName))) {
            return (HashMap<String, String>) ois.readObject();
        }
    }
}