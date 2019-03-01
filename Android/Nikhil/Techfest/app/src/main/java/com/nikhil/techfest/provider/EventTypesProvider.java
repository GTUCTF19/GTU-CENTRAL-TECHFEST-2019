package com.nikhil.techfest.provider;

import android.content.Context;
import android.content.res.Resources;

import com.nikhil.techfest.R;

import java.util.ArrayList;
import java.util.Arrays;

public class EventTypesProvider {

    private static String[] getTypes(Context context) {
        return new String[]{
                context.getString(R.string.event_types_tech),
                context.getString(R.string.event_types_non_tech),
                context.getString(R.string.event_types_work)
        };
    }

    public static ArrayList<String> getItems(Context context) {
        ArrayList<String> itemList = new ArrayList<>(Arrays.asList(getTypes(context)));
        return itemList;
    }
}
