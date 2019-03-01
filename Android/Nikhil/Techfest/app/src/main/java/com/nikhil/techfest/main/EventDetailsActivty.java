package com.nikhil.techfest.main;

import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.Toast;

import com.nikhil.techfest.R;

public class EventDetailsActivty extends AppCompatActivity implements View.OnClickListener {

    private Toolbar toolbar;
    private ImageView iv_event;
    private LinearLayout ll_register;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_event_details);

        initialize();
        setUpToolbar();
    }

    private void initialize() {
        iv_event = findViewById(R.id.iv_event);
        ll_register = findViewById(R.id.ll_register);
    }

    private void setUpToolbar() {
        toolbar = findViewById(R.id.toolbar);
        toolbar.setTitle(R.string.nav_drawer_event_details);
        toolbar.inflateMenu(R.menu.main);
        setSupportActionBar(toolbar);

        if(getSupportActionBar() != null) {
            getSupportActionBar().setDisplayHomeAsUpEnabled(true);
            getSupportActionBar().setDisplayShowHomeEnabled(true);
        }
    }

    @Override
    public boolean onSupportNavigateUp() {
        onBackPressed();
        return true;
    }

    @Override
    public void onClick(View v) {
        int id = v.getId();
        if(id == R.id.ll_register) {
            Toast.makeText(v.getContext(), "Register", Toast.LENGTH_SHORT);
        }
    }
}
