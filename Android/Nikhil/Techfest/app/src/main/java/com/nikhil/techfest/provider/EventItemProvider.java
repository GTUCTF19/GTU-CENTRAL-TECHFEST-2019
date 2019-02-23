package com.nikhil.techfest.provider;

import com.nikhil.techfest.R;

import java.util.ArrayList;

public class EventItemProvider {

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

    public static ArrayList<EventItemProvider> getItems() {

        ArrayList<EventItemProvider> itemList = new ArrayList<>();

        for(int i=1; i<=10; i++) {
            itemList.add(new EventItemProvider(R.mipmap.ic_launcher_round, "Event " + i));
        }
        return itemList;
    }
}
