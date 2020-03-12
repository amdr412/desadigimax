package com.ropii.desadigital.adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.ropii.desadigital.R;
import com.ropii.desadigital.activity.DetailBerita;
import com.ropii.desadigital.model.ModelBerita;

import java.net.MalformedURLException;
import java.net.URL;
import java.util.List;

public class AdapterBerita extends RecyclerView.Adapter<RecyclerView.ViewHolder>  {
    private Context context;
    private List<ModelBerita> mItems;

    public AdapterBerita(List<ModelBerita> mItems, Context context) {
        this.mItems = mItems;
        this.context = context;
    }

    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.row_berita, parent, false);
        return new HolderData(view);
    }

    @Override
    public void onBindViewHolder(RecyclerView.ViewHolder holder, int position) {
        final ModelBerita md = mItems.get(position);
        final HolderData holderData = (HolderData) holder;
        holderData.title_berita.setText(md.getJudul_berita());
        holderData.subtitle_berita.setText(md.getOleh());
        holderData.date_berita.setText(md.getTanggal());
        try {
            Glide.with(context)
                    .load(new URL(md.getFoto_berita()))
                    .placeholder(R.drawable.no_image)
                    .into(holderData.image_berita);
        } catch (MalformedURLException e) {
            e.printStackTrace();
        }

        holderData.card_berita.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(context, DetailBerita.class);
                i.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);// | Intent.FLAG_ACTIVITY_MULTIPLE_TASK);
                i.putExtra("title_konten_app", md.getJudul_berita());
                i.putExtra("subtitle_konten_app", md.getOleh());
                i.putExtra("tanggal_konten_app", md.getTanggal());
                i.putExtra("konten_app", md.getIsi_berita());
                i.putExtra("image_konten_app", md.getFoto_berita());
                context.startActivity(i);
            }
        });
    }

    @Override
    public int getItemCount() {
        return mItems.size();
    }

    private class HolderData extends RecyclerView.ViewHolder {
        public TextView title_berita, subtitle_berita, date_berita;
        public ImageView image_berita;
        public CardView card_berita;

        public HolderData(View view) {
            super(view);
            title_berita = (TextView) view.findViewById(R.id.title_berita);
            subtitle_berita = (TextView) view.findViewById(R.id.subtitle_berita);
            date_berita = (TextView) view.findViewById(R.id.date_berita);
            image_berita = (ImageView) view.findViewById(R.id.image_berita);
            card_berita = (CardView) view.findViewById(R.id.card_berita);
        }
    }
}
