<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSimpan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('MData');
    }

	function index()
	{
		$this->load->view('VForminput');
	}

    function prosesSimpan(){
        $tanggal            = $this->input->post('tanggal');
        $asalBuku           = $this->input->post('asalBuku');
        $nomorInvetaris     = $this->input->post('nomorInventaris');
        $pengarang          = $this->input->post('Pengarang');
        $judul              = $this->input->post('judul');
        $penerbit           = $this->input->post('penerbit');
        $tahunTerbit        = $this->input->post('tahunTerbit');
        $jml                = $this->input->post('jml');
        $nomorKlasifikasi   = $this->input->post('nomorKlasifikasi');
        $bahasa             = $this->input->post('bahasa');
        $macamKoleksi       = $this->input->post('macamKoleksi');
        $keterangan         = $this->input->post('keterangan');

        $where    = array(
            'tanggal'           => $tanggal,
            'asalBuku'          => $asalBuku,
            'nomorInventaris'   => $nomorInvetaris,
            'pengarang'         => $pengarang,
            'judul'             => $judul,
            'penerbit'          => $penerbit,
            'tahunTerbit'       => $tahunTerbit,
            'jml'               => $jml,
            'nomorKlasifikasi'  => $nomorKlasifikasi,
            'bahasa'            => $bahasa,
            'macamKoleksi'      => $macamKoleksi,
            'keterangan'        => $keterangan,
        );
        $cek = $this->MData->simpan('tbl_inventaris',$where);
        if($cek){
            echo "Berhasil";
        }else{
            echo "gagal";
        }
    }
}