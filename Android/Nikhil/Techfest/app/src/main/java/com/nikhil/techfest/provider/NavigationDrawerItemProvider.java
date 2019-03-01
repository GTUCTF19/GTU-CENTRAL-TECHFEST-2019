package com.nikhil.techfest.provider;

import android.content.Context;

import com.nikhil.techfest.R;
import com.nikhil.techfest.item.NavigationDrawerImage;
import com.nikhil.techfest.item.NavigationDrawerItem;

import java.util.ArrayList;

public class NavigationDrawerItemProvider {

    private static int[] getImageIDs() {
        return new int[] {
                R.mipmap.ic_home,
                R.mipmap.ic_event,
                R.mipmap.ic_about,
                R.mipmap.ic_contact,
                R.mipmap.ic_share
        };
    }

    private static String[] getTitles(Context context) {
        return new String[] {
                context.getString(R.string.nav_drawer_home),
                context.getString(R.string.nav_drawer_schedule),
                context.getString(R.string.nav_drawer_about_us),
                context.getString(R.string.nav_drawer_contact_us),
                context.getString(R.string.nav_drawer_share),
        };
    }

    public static ArrayList<Object> getItems(Context context) {

        ArrayList<Object> itemlist = new ArrayList<>();

        int imageIDs[] = getImageIDs();
        String titles[] = getTitles(context);

        itemlist.add(new NavigationDrawerImage());
        for(int i=0; i<imageIDs.length; i++) {
            itemlist.add(new NavigationDrawerItem(imageIDs[i], titles[i]));
        }

        return itemlist;
    }
}
