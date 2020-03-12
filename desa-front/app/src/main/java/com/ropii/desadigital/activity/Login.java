package com.ropii.desadigital.activity;

import androidx.core.content.ContextCompat;

import android.app.AlertDialog;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.NetworkError;
import com.android.volley.NoConnectionError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.TimeoutError;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.google.android.material.snackbar.Snackbar;
import com.ropii.desadigital.R;
import com.ropii.desadigital.server.ServerApi;
import com.ropii.desadigital.util.AppController;
import com.ropii.desadigital.util.PrefManager;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

import dmax.dialog.SpotsDialog;

public class Login extends BaseActivity {

    TextView txt_lupa_sandi, txt_daftar;
    EditText txt_email, txt_pass;
    Button btn_masuk;

    private PrefManager prefManager;
    AlertDialog dialog;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        findView();
        initView();
        initListener();
    }

    @Override
    public void findView() {
        txt_lupa_sandi = findViewById(R.id.txt_lupa_sandi);
        txt_daftar = findViewById(R.id.txt_daftar);

        txt_email = findViewById(R.id.txt_email);
        txt_pass = findViewById(R.id.txt_pass);
        btn_masuk = findViewById(R.id.btn_masuk);
    }

    @Override
    public void initView() {
        dialog = new SpotsDialog.Builder()
                .setContext(this)
                .setMessage("Sedang mencoba masuk...")
                .setCancelable(false)
                .build();
        prefManager = new PrefManager(this);
    }

    @Override
    public void initListener() {
        txt_lupa_sandi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(), LupaSandi.class);
                startActivity(i);
            }
        });

        txt_daftar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(getApplicationContext(), Daftar.class);
                startActivity(i);
            }
        });

        btn_masuk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (txt_email.getText().toString().isEmpty()){
                    txt_email.setError("Email harus diisi");
                }else if(txt_pass.getText().toString().isEmpty()){
                    txt_pass.setError("Kata sandi harus diisi");
                }else{
                    login(txt_email.getText().toString(), txt_pass.getText().toString());
                }
            }
        });
    }

    private void login(final String email, final String password) {
        dialog.show();
        // Tag biasanya digunakan ketika ingin membatalkan request volley
        String tag_string_req = "req_login";

        StringRequest strReq = new StringRequest(Request.Method.POST,
                ServerApi.login, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.d("volley", "Login Response: " + response.toString());

                try
                {
                    JSONObject data = new JSONObject(response);
                    String code = data.getString("code");
                    dialog.dismiss();
                    // ngecek node error dari api
                    if (code.equals("2")){
                        snackBar(data.getString("response"), R.color.error);
                    }else if (code.equals("1")) {
                        // user berhasil login
                        String id_user = data.getString("id_user");
                        //Set session di pref manager
                        prefManager.setIdUser(id_user);
                        prefManager.setLoginStatus(true);
                        finish();
                    } else if(code.equals("0")) {
                        // terjadi error dan tampilkan pesan error dari API
//                        dialog.hide();
                        snackBar(data.getString("response"), R.color.error);
                    }else{
                        snackBar("Sepertinya ada yang salah dengan koneksi anda", R.color.error);
                    }
                } catch (JSONException e) {
                    // JSON error
                    dialog.dismiss();
                    e.printStackTrace();
                    Toast.makeText(getApplicationContext(), "Json error: " + e.getMessage(), Toast.LENGTH_LONG).show();
                }
            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e("Volley", "Login Error: " + error.getMessage());
                dialog.dismiss();
                //cek error timeout, noconnection dan network error
                if ( error instanceof TimeoutError || error instanceof NoConnectionError ||error instanceof NetworkError) {
                    snackBar("Sepertinya ada yang salah dengan koneksi anda", R.color.error);
                }
            }
        }) {
            @Override
            protected Map<String, String> getParams() {
                // kirim parameter ke server
                Map<String, String> params = new HashMap<String, String>();
                params.put("email_user", email);
                params.put("password_user", password);

                return params;
            }
        };
        // menggunakan fungsi volley adrequest yang kita taro di appcontroller
        AppController.getInstance().addToRequestQueue(strReq, tag_string_req);
    }

    private void snackBar(String pesan, int warna){
        Snackbar snackbar = Snackbar.make(findViewById(android.R.id.content), pesan, Snackbar.LENGTH_LONG)
                .setAction("Action", null);
        View sbView = snackbar.getView();
        sbView.setBackgroundColor(ContextCompat.getColor(getApplicationContext(), warna));
        snackbar.show();
    }
}
