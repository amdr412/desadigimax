<?php
// $this->Msurat->print($id_surat);
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SURAT PENGANTAR SKCK',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Desa Maju Makmur, Tegal',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No. ',1,0);
        $pdf->Cell(85,6,'Nama Lengkap',1,0);
        $pdf->Cell(27,6,'Alamat Lengkap',1,0);
        $pdf->SetFont('Arial','',10);
        $surat = $this->db->get('tb_surat')->result();
        foreach ($surat as $row){
            $pdf->Cell(20,6,$row->id_surat,1,0);
            $pdf->Cell(85,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->alamat_lengkap,1,0);
        }
        $pdf->Output();
    }
}