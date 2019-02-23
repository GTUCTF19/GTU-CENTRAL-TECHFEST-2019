package com.nikhil.techfest.fragment;

import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.nikhil.techfest.R;
import com.nikhil.techfest.adapter.NavigationItemAdapter;
import com.nikhil.techfest.provider.NavigationDrawerItemProvider;

public class NavigationDrawerFragment extends Fragment {

    private View view;
    private ActionBarDrawerToggle drawerToggle;
//    private DrawerLayout drawerLayout;

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        view = inflater.inflate(R.layout.fragment_navigation_drawer, container, false);
        return view;
    }

    public void setUpRecyclerView(DrawerLayout drawerLayout) {
        RecyclerView recyclerView = view.findViewById(R.id.rv_drawer_items);
        NavigationItemAdapter navigationItemAdapter = new NavigationItemAdapter(getContext(), NavigationDrawerItemProvider.getItems(getContext()), drawerLayout);
        recyclerView.setAdapter(navigationItemAdapter);
        recyclerView.setLayoutManager(new LinearLayoutManager(getContext()));
    }

    public void setUpNavigationDrawer(int fragmentID, final DrawerLayout drawerLayout, Toolbar toolbar) {
        drawerToggle = new ActionBarDrawerToggle(getActivity(), drawerLayout, toolbar, R.string.drawer_open, R.string.drawer_close) {

            @Override
            public void onDrawerOpened(View drawerView) {
                super.onDrawerOpened(drawerView);
            }

            @Override
            public void onDrawerClosed(View drawerView) {
                super.onDrawerClosed(drawerView);
            }
        };
        drawerLayout.addDrawerListener(drawerToggle);
        drawerLayout.post(new Runnable() {
            @Override
            public void run() {
                drawerToggle.syncState();
            }
        });
    }
}
