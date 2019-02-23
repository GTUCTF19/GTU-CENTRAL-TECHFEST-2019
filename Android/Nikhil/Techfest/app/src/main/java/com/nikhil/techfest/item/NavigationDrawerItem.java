package com.nikhil.techfest.item;

public class NavigationDrawerItem {

    private int imageID;
    private String title;
    private final static int type = 2;

    private void setimageID(int imageID) {
        this.imageID = imageID;
    }

    private void setTitle(String title) {
        this.title = title;
    }

    public int getimageID() {
        return imageID;
    }

    public String getTitle() {
        return title;
    }

    public int getType() {
        return type;
    }

    public NavigationDrawerItem(int imageID, String title) {
        this.imageID = imageID;
        this.title = title;
    }
}
