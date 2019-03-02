package com.nikhil.techfest.fragment;


import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.v4.app.Fragment;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.nikhil.techfest.R;
import com.nikhil.techfest.adapter.EventItemAdapter;
import com.nikhil.techfest.provider.EventItemProvider;

public class EventsFragment extends Fragment {

    int position;
    public EventsFragment() {}

    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_events, container, false);
        Bundle bundle = getArguments();
        if (bundle != null) {
            position=bundle.getInt("index");
        }
        setUpRecyclerView(view);

        return view;
    }

    private void setUpRecyclerView(View view) {
        RecyclerView recyclerView = view.findViewById(R.id.rv_events);
        EventItemAdapter itemAdapter = new EventItemAdapter(view.getContext(), EventItemProvider.getItems(view.getContext(), position));
        recyclerView.setAdapter(itemAdapter);

        GridLayoutManager layoutManager = new GridLayoutManager(view.getContext(), 2);
        layoutManager.setOrientation(GridLayoutManager.VERTICAL);
        recyclerView.setLayoutManager(layoutManager);
        recyclerView.setItemAnimator(new DefaultItemAnimator());
    }
}
