<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasar extends MY_Controller {

	public function index()
	{
		//$this->mLayout                               = "home";
		$this->mTitle                                = "Pasar";
		$this->mViewFile                             = 'pasar';
		$this->mViewData['data_pasar']     = $this->Komoditas_model->get_pasar();
	}

	public function data($id)
	{
		$this->mTitle                                = "Data Pasar";
		$this->mViewFile                             = 'data_pasar';
		$this->mViewData['data_rataratahariini']     = $this->Komoditas_model->get_rataratapasarterakhir($id);
		$this->mViewData['data_ratarataharikemarin'] = $this->Komoditas_model->get_rataratapasarkemarin($id);
		$this->mViewData['data_komoditas']     = $this->Komoditas_model->get_namakomoditas($id);
		$this->mViewData['data_tanggal']   = $this->Komoditas_model->get_tanggal_pasar($id);
	}

	public function cari_tanggal($id)
	{
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$this->mTitle                                = "Hasil Pencarian";
		$this->mViewFile                             = 'cari_tanggal_pasar';
		$this->mViewData['data_rataratahariini']     = $this->Komoditas_model->get_rataratapasarterakhir($id);
		$this->mViewData['data_ratarataharikemarin'] = $this->Komoditas_model->get_rataratapasarkemarin($id);
		$this->mViewData['data_komoditas']     = $this->Komoditas_model->get_carinamakomoditas($id,$tgl_awal,$tgl_akhir);
		$this->mViewData['tgl_awal']       = $tgl_awal;
		$this->mViewData['tgl_akhir']       = $tgl_akhir;
		$this->mViewData['data_tanggal']   = $this->Komoditas_model->get_tanggal_pasar($id);
	}


}