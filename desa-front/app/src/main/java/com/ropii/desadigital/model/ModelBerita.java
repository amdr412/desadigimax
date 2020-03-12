package com.ropii.desadigital.model;

public class ModelBerita {
    String id_berita, judul_berita, isi_berita, dibuat, foto_berita, oleh;

    public String getId_berita() {
        return id_berita;
    }

    public void setId_berita(String id_berita) {
        this.id_berita = id_berita;
    }

    public String getJudul_berita() {
        return judul_berita;
    }

    public void setJudul_berita(String judul_berita) {
        this.judul_berita = judul_berita;
    }

    public String getIsi_berita() {
        return isi_berita;
    }

    public void setIsi_berita(String isi_berita) {
        this.isi_berita = isi_berita;
    }

    public String getTanggal() {
        return dibuat;
    }

    public void setTanggal(String dibuat) {
        this.dibuat = dibuat;
    }

    public String getFoto_berita() {
        return foto_berita;
    }

    public void setFoto_berita(String foto_berita) {
        this.foto_berita = foto_berita;
    }

    public String getOleh() {
        return oleh;
    }

    public void setOleh(String oleh) {
        this.oleh = oleh;
    }
}
