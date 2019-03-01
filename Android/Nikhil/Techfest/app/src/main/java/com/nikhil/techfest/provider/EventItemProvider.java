package com.nikhil.techfest.provider;

import android.content.Context;

import com.nikhil.techfest.R;

import java.util.ArrayList;

public class EventItemProvider {

    private static final int TECH = 0;
    private static final int NONTECH = 1;
    private static final int WORKSHOP = 2;

    private int imageID;
    private String eventName;

    private EventItemProvider(int imageID, String eventName) {
        this.imageID = imageID;
        this.eventName = eventName;
    }

    public void setImageID(int imageID) {
        this.imageID = imageID;
    }

    public void setEventName(String eventName) {
        this.eventName = eventName;
    }

    public int getImageID() {
        return imageID;
    }

    public String getEventName() {
        return eventName;
    }

    public static ArrayList<EventItemProvider> getItems(Context context,int type) {

        ArrayList<EventItemProvider> itemList = new ArrayList<>();

        int[] id;
        String[] name;
        if(type == TECH) {
            id = getTechID();
            name = getTechName(context);
        } else if(type == NONTECH) {
            id = getNonTechID();
            name = getNonTechName(context);
        } else if(type == WORKSHOP) {
            id = getWorkID();
            name = getWorkName(context);
        } else {
            id = getTechID();
            name = getTechName(context);
        }

        for(int i=0; i<name.length; i++) {
            itemList.add(new EventItemProvider(id[i], name[i]));
        }
        return itemList;
    }

    private static int[] getTechID() {
        return new int[] {
                R.drawable.otoram2,
                R.drawable.otoram3,
                R.drawable.otoram4,
                R.drawable.otoram5,
                R.drawable.otoram6
        };
    }

    private static String[] getTechName(Context context) {
        return new String[] {
                context.getString(R.string.tech_1),
                context.getString(R.string.tech_2),
                context.getString(R.string.tech_3),
                context.getString(R.string.tech_4),
                context.getString(R.string.tech_5)
        };
    }

    private static int[] getNonTechID() {
        return new int[] {
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round
        };
    }

    private static String[] getNonTechName(Context context) {
        return new String[] {
                context.getString(R.string.non_1),
                context.getString(R.string.non_2),
                context.getString(R.string.non_3),
                context.getString(R.string.non_4),
                context.getString(R.string.non_5)
        };
    }

    private static int[] getWorkID() {
        return new int[] {
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round,
                R.mipmap.ic_launcher_round
        };
    }

    private static String[] getWorkName(Context context) {
        return new String[] {
                context.getString(R.string.work_1),
                context.getString(R.string.work_2),
                context.getString(R.string.work_3),
                context.getString(R.string.work_4),
                context.getString(R.string.work_5)
        };
    }
}
