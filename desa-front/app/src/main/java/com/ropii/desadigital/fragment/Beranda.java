package com.ropii.desadigital.fragment;


import android.os.Bundle;

import androidx.core.widget.NestedScrollView;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.RelativeLayout;
import android.widget.TextView;

import com.android.volley.NetworkError;
import com.android.volley.NoConnectionError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.TimeoutError;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.facebook.shimmer.ShimmerFrameLayout;
import com.ropii.desadigital.R;
import com.ropii.desadigital.adapter.AdapterKontenBeranda;
import com.ropii.desadigital.adapter.AdapterMenu;
import com.ropii.desadigital.adapter.SliderAdapterExample;
import com.ropii.desadigital.helper.Helper;
import com.ropii.desadigital.model.ModelKonten;
import com.ropii.desadigital.model.ModelMenu;
import com.ropii.desadigital.model.ModelSlider;
import com.ropii.desadigital.server.ServerApi;
import com.ropii.desadigital.util.AppController;
import com.ropii.desadigital.util.PrefManager;
import com.smarteist.autoimageslider.IndicatorAnimations;
import com.smarteist.autoimageslider.IndicatorView.draw.controller.DrawController;
import com.smarteist.autoimageslider.SliderAnimations;
import com.smarteist.autoimageslider.SliderView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

/**
 * A simple {@link Fragment} subclass.
 */
public class Beranda extends BaseFragment {

    View view;
    SwipeRefreshLayout swipeRefreshLayout;
    ShimmerFrameLayout shimmer_beranda;
    NestedScrollView beranda_content;

    RelativeLayout layout_koneksi, layout_kosong;

    SliderView sliderView;
    SliderAdapterExample adapter;
    List<ModelSlider> mItems;

    AdapterMenu adapterMenu;
    List<ModelMenu> modelMenus;
    RecyclerView recyclerViewMenu;

    TextView txt_greeting;
    PrefManager prefManager;

    AdapterKontenBeranda mAdapterKonten;
    List<ModelKonten> mItemsKonten;
    RecyclerView recycle_konten;

    public Beranda() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        view = inflater.inflate(R.layout.fragment_beranda, container, false);

        findView();
        initView();
        initListener();
        getDataSlider();
        getDataMenu();
        getDataKonten(1);

        return view;
    }

    @Override
    public void findView() {
        swipeRefreshLayout = view.findViewById(R.id.swipe);
        beranda_content = view.findViewById(R.id.beranda_content);
        shimmer_beranda = view.findViewById(R.id.shimmer_beranda);

        layout_koneksi = view.findViewById(R.id.layout_koneksi);
        layout_kosong = view.findViewById(R.id.layout_kosong);

        sliderView = view.findViewById(R.id.imageSlider);
        recyclerViewMenu = view.findViewById(R.id.recycle_menu);

        txt_greeting = view.findViewById(R.id.txt_greeting);

        recycle_konten = view.findViewById(R.id.recycle_konten);
    }

    @Override
    public void initView() {
        mItems = new ArrayList<>();
        adapter = new SliderAdapterExample(mItems, getContext());
        adapter.setCount(4);
        sliderView.setSliderAdapter(adapter);
        sliderView.setIndicatorAnimation(IndicatorAnimations.WORM); //set indicator animation by using SliderLayout.IndicatorAnimations. :WORM or THIN_WORM or COLOR or DROP or FILL or NONE or SCALE or SCALE_DOWN or SLIDE and SWAP!!
        sliderView.setSliderTransformAnimation(SliderAnimations.SIMPLETRANSFORMATION);
        sliderView.setCircularHandlerEnabled(true);
        sliderView.startAutoCycle();

        mItemsKonten = new ArrayList<>();
        mAdapterKonten = new AdapterKontenBeranda(mItemsKonten, getContext());
        recycle_konten.setAdapter(mAdapterKonten);

        modelMenus = new ArrayList<>();
        adapterMenu = new AdapterMenu(modelMenus, getContext());
        recyclerViewMenu.setAdapter(adapterMenu);
        prefManager = new PrefManager(getActivity().getApplicationContext());
        if (prefManager.getLoginStatus()) {
            txt_greeting.setText("Selamat "+ Helper.waktu()+", "+prefManager.getNamaUser().toUpperCase());
        }else{
            txt_greeting.setText("Selamat "+ Helper.waktu()+", warga kab. tegal");
        }

    }

    @Override
    public void initListener() {
        sliderView.setOnIndicatorClickListener(new DrawController.ClickListener() {
            @Override
            public void onIndicatorClicked(int position) {
                sliderView.setCurrentPagePosition(position);
            }
        });

        swipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                getDataSlider();
                getDataMenu();
                getDataKonten(1);
            }
        });

        layout_koneksi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getDataSlider();
                getDataMenu();
                getDataKonten(1);
            }
        });

        layout_kosong.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getDataSlider();
                getDataMenu();
                getDataKonten(1);
            }
        });
    }

    private void set_loading(){
        shimmer_beranda.setVisibility(View.VISIBLE);
        layout_koneksi.setVisibility(View.GONE);
        layout_kosong.setVisibility(View.GONE);
        beranda_content.setVisibility(View.GONE);
        shimmer_beranda.startShimmer();
    }

    private void load_success(){
        swipeRefreshLayout.setRefreshing(false);
        shimmer_beranda.setVisibility(View.GONE);
        layout_koneksi.setVisibility(View.GONE);
        layout_kosong.setVisibility(View.GONE);
        beranda_content.setVisibility(View.VISIBLE);
        shimmer_beranda.stopShimmer();
    }

    private void load_fail(){
        swipeRefreshLayout.setRefreshing(false);
        shimmer_beranda.setVisibility(View.GONE);
        layout_koneksi.setVisibility(View.VISIBLE);
        layout_kosong.setVisibility(View.GONE);
        beranda_content.setVisibility(View.GONE);
        shimmer_beranda.stopShimmer();
    }

    private void load_empty(){
        swipeRefreshLayout.setRefreshing(false);
        shimmer_beranda.setVisibility(View.GONE);
        layout_koneksi.setVisibility(View.VISIBLE);
        layout_kosong.setVisibility(View.GONE);
        beranda_content.setVisibility(View.GONE);
        shimmer_beranda.stopShimmer();
    }

    private void getDataSlider(){
        set_loading();
        JsonArrayRequest requestData = new JsonArrayRequest(Request.Method.POST, ServerApi.slider, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        //load_success();
                        Log.d("volley", "response : "+response.toString());
                        if (response.length() > 0){
                            mItems.clear();
                            adapter.setCount(response.length());
                            for (int i = 0; i< response.length(); i++){
                                try {
                                    JSONObject data = response.getJSONObject(i);
                                    ModelSlider md = new ModelSlider();
                                    md.setId_slider(data.getString("id_slider"));
                                    md.setSlider(data.getString("slider"));
                                    md.setCaption(data.getString("caption"));
                                    md.setJenis(data.getString("jenis"));
                                    mItems.add(md);
                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                            }
                            adapter.notifyDataSetChanged();
                        }else{
                            load_empty();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Log.d("volley", "error : "+error.getMessage());
                        if ( error instanceof TimeoutError || error instanceof NoConnectionError ||error instanceof NetworkError) {
                            load_fail();
                        }
                    }
                });
        AppController.getInstance().addToRequestQueue(requestData);
    }

    private void getDataMenu(){
        JsonArrayRequest requestData = new JsonArrayRequest(Request.Method.POST, ServerApi.menu_app, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        Log.d("volley", "response : "+response.toString());
                        if (response.length() > 0){
                            modelMenus.clear();
                            for (int i = 0; i< response.length(); i++){
                                try {
                                    JSONObject data = response.getJSONObject(i);
                                    ModelMenu modelMenu = new ModelMenu();
                                    modelMenu.setId_menu_app(data.getString("id_menu_app"));
                                    modelMenu.setTitle_menu_app(data.getString("title_menu_app"));
                                    modelMenu.setSubtitle_menu_app(data.getString("subtitle_menu_app"));
                                    modelMenu.setImage_menu_app(data.getString("image_menu_app"));
                                    modelMenus.add(modelMenu);
                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                            }
                            adapter.notifyDataSetChanged();
                        }else{
                            load_empty();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Log.d("volley", "error : "+error.getMessage());
                        if ( error instanceof TimeoutError || error instanceof NoConnectionError ||error instanceof NetworkError) {
                            load_fail();
                        }else{
                            load_fail();
                        }
                    }
                });
        AppController.getInstance().addToRequestQueue(requestData);
    }

    private void getDataKonten(int page){
        set_loading();
        JsonArrayRequest requestData = new JsonArrayRequest(Request.Method.POST, ServerApi.konten_app+"?id=1&halaman="+page, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        Log.d("volley", "response : "+response.toString());
                        if (response.length() > 0){
                            load_success();
                            mItemsKonten.clear();
                            for (int i = 0; i< 5; i++){
                                try {
                                    JSONObject data = response.getJSONObject(i);
                                    ModelKonten md = new ModelKonten();
                                    md.setId_konten_app(data.getString("id_konten_app"));
                                    md.setTitle_konten_app(data.getString("title_konten_app"));
                                    md.setSubtitle_konten_app(data.getString("subtitle_konten_app"));
                                    md.setImage_konten_app(data.getString("image_konten_app"));
                                    md.setKonten_app(data.getString("konten_app"));
                                    md.setLat(data.getString("lat"));
                                    md.setLng(data.getString("lng"));
                                    mItemsKonten.add(md);
                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                            }
                            mAdapterKonten.notifyDataSetChanged();
                        }else{
                            load_empty();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Log.d("volley", "error : "+error.getMessage());
                        if ( error instanceof TimeoutError || error instanceof NoConnectionError ||error instanceof NetworkError) {
                            load_fail();
                        }else{
                            load_fail();
                        }
                    }
                });
        AppController.getInstance().addToRequestQueue(requestData);
    }
}
