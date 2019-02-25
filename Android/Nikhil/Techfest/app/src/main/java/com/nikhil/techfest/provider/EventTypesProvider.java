package com.nikhil.techfest.provider;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class EventTypesProvider {

    private static String[] getTypes() {
        return new String[]{
                "Event Type 1",
                "Event Type 2",
                "Event Type 3",
                "Event Type 4",
                "Event Type 5"
        };
    }

    public static ArrayList<String> getItems() {
        ArrayList<String> itemList = new ArrayList<>(Arrays.asList(getTypes()));
        return itemList;
    }
}
