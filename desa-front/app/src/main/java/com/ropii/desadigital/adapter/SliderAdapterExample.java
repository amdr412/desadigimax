package com.ropii.desadigital.adapter;

import android.content.Context;
import android.graphics.Color;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.ropii.desadigital.R;
import com.ropii.desadigital.model.ModelSlider;
import com.smarteist.autoimageslider.SliderViewAdapter;

import java.util.List;

public class SliderAdapterExample extends
        SliderViewAdapter<SliderAdapterExample.SliderAdapterVH> {

    private Context context;
    private int mCount;
    private List<ModelSlider> mItems;

    public SliderAdapterExample(List<ModelSlider> mItems, Context context) {
        this.mItems = mItems;
        this.context = context;
    }

    public void setCount(int count) {
        this.mCount = count;
    }

    @Override
    public SliderAdapterVH onCreateViewHolder(ViewGroup parent) {
        View inflate = LayoutInflater.from(parent.getContext()).inflate(R.layout.image_slider_layout_item, null);
        return new SliderAdapterVH(inflate);
    }

    @Override
    public void onBindViewHolder(SliderAdapterVH sliderAdapterVH, final int position) {
        ModelSlider md = mItems.get(position);
        SliderAdapterVH viewHolder = (SliderAdapterVH) sliderAdapterVH;
        viewHolder.textViewDescription.setText(md.getCaption());
        viewHolder.textViewDescription.setTextSize(16);
        viewHolder.textViewDescription.setTextColor(Color.WHITE);
        viewHolder.imageGifContainer.setVisibility(View.GONE);
        Glide.with(viewHolder.itemView)
                .load(md.getSlider())
                .placeholder(R.drawable.no_image)
                .fitCenter()
                .into(viewHolder.imageViewBackground);

    }

    @Override
    public int getCount() {
        //slider view count could be dynamic size
        return mItems.size();
    }

    public int getItemCount() {
        return mItems.size();
    }

    class SliderAdapterVH extends SliderViewAdapter.ViewHolder {

        View itemView;
        ImageView imageViewBackground;
        ImageView imageGifContainer;
        TextView textViewDescription;

        public SliderAdapterVH(View itemView) {
            super(itemView);
            imageViewBackground = itemView.findViewById(R.id.iv_auto_image_slider);
            imageGifContainer = itemView.findViewById(R.id.iv_gif_container);
            textViewDescription = itemView.findViewById(R.id.tv_auto_image_slider);
            this.itemView = itemView;
        }
    }

}
