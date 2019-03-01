package com.nikhil.techfest.adapter;

import android.content.Context;
import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.nikhil.techfest.R;
import com.nikhil.techfest.main.EventDetailsActivty;
import com.nikhil.techfest.provider.EventItemProvider;

import java.util.List;

public class EventItemAdapter extends RecyclerView.Adapter<EventItemAdapter.ViewHolder> {

    private List<EventItemProvider> itemList;
    private LayoutInflater inflater;

    public EventItemAdapter(Context context, List<EventItemProvider> itemList){
        this.itemList = itemList;
        this.inflater = LayoutInflater.from(context);
    }

    @NonNull
    @Override
    public EventItemAdapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        View view = inflater.inflate(R.layout.recycler_event_image_item, viewGroup, false);
        ViewHolder viewHolder = new ViewHolder(view);
        return viewHolder;
    }

    @Override
    public void onBindViewHolder(@NonNull EventItemAdapter.ViewHolder viewHolder, int i) {
        EventItemProvider item = itemList.get(i);
        viewHolder.setData(item, i);
        viewHolder.setListener();
    }

    @Override
    public int getItemCount() {
        return itemList.size();
    }

    class ViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener {

        private CardView cv_event;
        private ImageView iv_event_image;
        private TextView tv_event_name;

        private EventItemProvider current_item;
        private int position;

        ViewHolder(@NonNull View itemView) {
            super(itemView);

            cv_event = itemView.findViewById(R.id.ri_cv_event);
            iv_event_image = itemView.findViewById(R.id.ri_iv_event_image);
            tv_event_name = itemView.findViewById(R.id.ri_tv_event_name);
        }

        void setData(EventItemProvider item, int position) {
            iv_event_image.setImageResource(item.getImageID());
            tv_event_name.setText(item.getEventName());

            current_item = item;
            this.position = position;
        }

        void setListener() {
            cv_event.setOnClickListener(this);
        }

        @Override
        public void onClick(View v) {
            Toast.makeText(v.getContext(), current_item.getEventName(), Toast.LENGTH_SHORT).show();
            Intent intent = new Intent(v.getContext(), EventDetailsActivty.class);
            v.getContext().startActivity(intent);
        }
    }
}
