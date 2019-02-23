package com.nikhil.techfest.adapter;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.nikhil.techfest.R;
import com.nikhil.techfest.item.NavigationDrawerImage;
import com.nikhil.techfest.item.NavigationDrawerItem;
import com.nikhil.techfest.main.EventsActivity;

import java.util.List;

public class NavigationItemAdapter extends RecyclerView.Adapter<NavigationItemAdapter.ItemViewHolder> {

    private static final int IMAGE = 1;
    private static final int ITEM = 2;

    private List<Object> itemProviderList;
    private LayoutInflater inflater;

    private Toolbar toolbar;
    private DrawerLayout drawerLayout;

    public NavigationItemAdapter(Context context, List<Object> itemProviderList, DrawerLayout drawerLayout) {
        this.itemProviderList = itemProviderList;
        this.inflater = LayoutInflater.from(context);

        this.toolbar = ((Activity) context).findViewById(R.id.toolbar);
        this.drawerLayout = drawerLayout;
    }

    @NonNull
    @Override
    public NavigationItemAdapter.ItemViewHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        if(i==IMAGE) {
            View view = inflater.inflate(R.layout.navigation_drawer_image, viewGroup, false);
            ItemViewHolder_Image holder_image = new ItemViewHolder_Image(view);
            return holder_image;
        } else {
            View view = inflater.inflate(R.layout.navigation_drawer_item, viewGroup, false);
            ItemViewHolder_Item holder_item = new ItemViewHolder_Item(view);
            return holder_item;
        }
    }

    @Override
    public void onBindViewHolder(@NonNull NavigationItemAdapter.ItemViewHolder itemViewHolder, int i) {
        if(itemViewHolder.getItemViewType()==IMAGE) {
            NavigationDrawerImage item = (NavigationDrawerImage) itemProviderList.get(i);
            ItemViewHolder_Image holder_user = (ItemViewHolder_Image) itemViewHolder;
            holder_user.setData(item, i);
            holder_user.setListener();
        } else {
            NavigationDrawerItem item = (NavigationDrawerItem) itemProviderList.get(i);
            ItemViewHolder_Item holder_item = (ItemViewHolder_Item) itemViewHolder;
            holder_item.setData(item, i);
            holder_item.setListener();
        }
    }

    @Override
    public int getItemViewType(int position) {
        if(itemProviderList.get(position) instanceof NavigationDrawerImage) {
            return IMAGE;
        } else {
            return ITEM;
        }
    }

    @Override
    public int getItemCount() {
        return itemProviderList.size();
    }

    class ItemViewHolder extends RecyclerView.ViewHolder {

        private int type;

        ItemViewHolder(@NonNull View itemView) {
            super(itemView);
        }
    }

    class ItemViewHolder_Image extends ItemViewHolder implements View.OnClickListener {

        private LinearLayout ll_image;

        private NavigationDrawerImage current;
        private int position;

        ItemViewHolder_Image(@NonNull View itemView) {
            super(itemView);

            ll_image = itemView.findViewById(R.id.ll_navigation_image);
        }

        void setData(NavigationDrawerImage current, int position) {
            this.current = current;
            this.position = position;
        }

        void setListener() {
            ll_image.setOnClickListener(this);
        }

        @Override
        public void onClick(View v) {
        }
    }

    class ItemViewHolder_Item extends ItemViewHolder implements View.OnClickListener {

        private LinearLayout ll_item;
        private ImageView iv_icon;
        private TextView tv_title;

        private NavigationDrawerItem current;
        private int position;

        ItemViewHolder_Item(@NonNull View itemView) {
            super(itemView);

            ll_item = itemView.findViewById(R.id.ll_navigation_item);
            iv_icon = itemView.findViewById(R.id.iv_navigation_item_icon);
            tv_title = itemView.findViewById(R.id.tv_navigation_item_title);
        }

        void setData(NavigationDrawerItem current, int position) {
            this.iv_icon.setImageResource(current.getimageID());
            this.tv_title.setText(current.getTitle());

            this.current = current;
            this.position = position;
        }

        void setListener() {
            ll_item.setOnClickListener(this);
        }

        @Override
        public void onClick(View v) {

            if(current.getTitle().equals("Events")) {
                v.getContext().startActivity(new Intent(v.getContext(), EventsActivity.class));
            }

            Toast.makeText(v.getContext(), current.getTitle(), Toast.LENGTH_SHORT).show();
            toolbar.setTitle(current.getTitle());
            drawerLayout.closeDrawer(Gravity.START);
        }
    }
}
