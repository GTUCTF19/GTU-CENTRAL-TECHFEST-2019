package com.nikhil.techfest.adapter;

import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentPagerAdapter;

import com.nikhil.techfest.fragment.EventsFragment;

import java.util.List;

public class EventsPagerAdapter extends FragmentPagerAdapter {

    private List<String> eventTypes;

    public EventsPagerAdapter(FragmentManager fm, List<String> eventTypes) {
        super(fm);
        this.eventTypes=eventTypes;
    }

    @Override
    public Fragment getItem(int i) {
        EventsFragment fragment = new EventsFragment();
        Bundle bundle = new Bundle();
        bundle.putInt("index",i);
        fragment.setArguments(bundle);
        return fragment ;
    }

    @Override
    public int getCount() {
        return eventTypes.size();
    }

    @Nullable
    @Override
    public CharSequence getPageTitle(int position) {
        return eventTypes.get(position);
    }
}
