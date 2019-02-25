package com.nikhil.techfest.main;

import android.os.Build;
import android.support.design.widget.TabLayout;
import android.support.v4.view.ViewPager;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.Menu;

import com.nikhil.techfest.R;
import com.nikhil.techfest.adapter.EventItemAdapter;
import com.nikhil.techfest.adapter.EventsPagerAdapter;
import com.nikhil.techfest.fragment.NavigationDrawerFragment;
import com.nikhil.techfest.provider.EventItemProvider;
import com.nikhil.techfest.provider.EventTypesProvider;

public class MainActivity extends AppCompatActivity {

    private Toolbar toolbar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        setUpToolbar();
        setUpNavigationDrawer();
        setUpEventViewPager();
    }

    private void setUpToolbar() {
        toolbar = findViewById(R.id.toolbar);
        toolbar.setTitle(R.string.nav_drawer_home);
        toolbar.inflateMenu(R.menu.main);
        setSupportActionBar(toolbar);
        getSupportActionBar().setElevation(0);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return super.onCreateOptionsMenu(menu);
    }

    private void setUpNavigationDrawer() {
        NavigationDrawerFragment drawerFragment = (NavigationDrawerFragment) getSupportFragmentManager().findFragmentById(R.id.navigation_drawer_fragment);
        DrawerLayout drawerLayout = findViewById(R.id.drawer_layout);
        drawerFragment.setUpNavigationDrawer(R.id.navigation_drawer_fragment, drawerLayout, toolbar);
        drawerFragment.setUpRecyclerView(drawerLayout);
    }

    private void setUpEventViewPager() {
        ViewPager viewPager = findViewById(R.id.vp_event);
        EventsPagerAdapter adapter = new EventsPagerAdapter(getSupportFragmentManager(), EventTypesProvider.getItems());
        viewPager.setAdapter(adapter);

        TabLayout tabLayout =findViewById(R.id.tl_event);
        tabLayout.setupWithViewPager(viewPager);
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            tabLayout.setElevation(5*getResources().getDisplayMetrics().density);
        }
    }
}
