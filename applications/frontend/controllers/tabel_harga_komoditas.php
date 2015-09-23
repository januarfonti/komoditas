<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabel_harga_komoditas extends MY_Controller {

	public function index()
	{
		$this->mLayout                               = "home";
		$this->mTitle                                = "Tabel Harga Komoditas";
		$this->mViewFile                             = 'tabel_harga_komoditas';
		$this->mViewData['data_rataratahariini']     = $this->Komoditas_model->get_rataratahariini_tabel();
		$this->mViewData['data_ratarataharikemarin'] = $this->Komoditas_model->get_ratarataharikemarin();
		$this->mViewData['data_pasar']              = $this->Komoditas_model->get_pasar_tabel();
	}

	public function cari()
	{
		$tgl_awal                                    = $this->input->post('tgl_awal');
		$id_pasar                                    = $this->input->post('id_pasar');
		$this->mLayout                               = "home";
		$this->mTitle                                = "Tabel Harga Komoditas";
		$this->mViewFile                             = 'tabel_harga_komoditas';
		$this->mViewData['data_rataratahariini']     = $this->Komoditas_model->get_rataratahariini_tabel_cari($tgl_awal,$id_pasar);
		$this->mViewData['data_ratarataharikemarin'] = $this->Komoditas_model->get_ratarataharikemarin_tabel_cari($tgl_awal,$id_pasar);
		$this->mViewData['data_pasar']               = $this->Komoditas_model->get_pasar_tabel();
		$this->mViewData['tgl_awal']                 = $tgl_awal;
		$this->mViewData['nama_pasar']                 = $this->Komoditas_model->get_namapasar_tabel($id_pasar);

	}
}