package com.nikhil.techfest.main;

import android.os.Build;
import android.support.annotation.NonNull;
import android.support.design.widget.TabLayout;
import android.support.v4.view.ViewPager;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.View;

import com.nikhil.techfest.R;
import com.nikhil.techfest.adapter.EventsPagerAdapter;
import com.nikhil.techfest.fragment.NavigationDrawerFragment;
import com.nikhil.techfest.provider.EventTypesProvider;

import java.util.Objects;

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
        Objects.requireNonNull(getSupportActionBar()).setElevation(0);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return super.onCreateOptionsMenu(menu);
    }

    private void setUpNavigationDrawer() {
        NavigationDrawerFragment drawerFragment = (NavigationDrawerFragment) getSupportFragmentManager().findFragmentById(R.id.navigation_drawer_fragment);
        DrawerLayout drawerLayout = findViewById(R.id.drawer_layout);
        if (drawerFragment != null) {
            drawerFragment.setUpNavigationDrawer(R.id.navigation_drawer_fragment, drawerLayout, toolbar);
            drawerFragment.setUpRecyclerView(drawerLayout);
        }
    }

    private void setUpEventViewPager() {
        ViewPager viewPager = findViewById(R.id.vp_event);
        EventsPagerAdapter adapter = new EventsPagerAdapter(getSupportFragmentManager(), EventTypesProvider.getItems(getApplicationContext()));
        viewPager.setAdapter(adapter);
        viewPager.setPageTransformer(true,new ZoomOutViewPagerTransformation());
//        viewPager.setBackgroundResource(R.drawable.back);
//        viewPager.getBackground().setAlpha(20);

        TabLayout tabLayout =findViewById(R.id.tl_event);
        tabLayout.setupWithViewPager(viewPager);
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            tabLayout.setElevation(5*getResources().getDisplayMetrics().density);
        }
        viewPager.setCurrentItem(tabLayout.getSelectedTabPosition());
    }

    private class ZoomOutViewPagerTransformation implements ViewPager.PageTransformer {

        private static final float MIN_SCALE = 0.65f;
        private static final float MIN_ALPHA = 0.3f;

        @Override
        public void transformPage(@NonNull View view, float v) {
            if(v < -1) {
                view.setAlpha(0);
            } else if(v <= 1) {
                view.setScaleX(Math.max(MIN_SCALE, 1-Math.abs(v)));
                view.setScaleY(Math.max(MIN_SCALE, 1-Math.abs(v)));
                view.setAlpha(Math.max(MIN_ALPHA, 1-Math.abs(v)));
            } else {
                view.setAlpha(0);
            }
        }
    }
}
