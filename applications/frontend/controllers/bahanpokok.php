<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahanpokok extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model');
	}
	public function index()
	{
		$this->mTitle                   = "Berita";
		$this->mViewFile                = 'berita';
		$this->mViewData['data_berita'] = $this->berita->get_all();
	}

	public function detail($id)
	{
		$this->mLayout                               = "home";
		$this->mTitle                      = "Detail Bahan Pokok";
		$this->mViewFile                   = 'detail_bahanpokok';
		$this->mViewData['data_komoditas'] = $this->Komoditas_model->get_detailharga($id);
		$this->mViewData['data_pasar']     = $this->Komoditas_model->get_pasar();
		$this->mViewData['data_tanggal']   = $this->Komoditas_model->get_tanggal($id);
		$this->mViewData['data_max']       = $this->Komoditas_model->get_max($id);
		$this->mViewData['data_min']       = $this->Komoditas_model->get_min($id);
		$this->mViewData['data_avg']       = $this->Komoditas_model->get_avg($id);
	}

	public function cari_tanggal($id)
	{
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$this->mTitle                      = "Cari Berdasarkan Tanggal";
		$this->mViewFile                   = 'caritanggal_bahanpokok';
		$this->mViewData['data_komoditas'] = $this->Komoditas_model->get_caridetailharga($id,$tgl_awal,$tgl_akhir);
		$this->mViewData['data_pasar']     = $this->Komoditas_model->get_pasar();
		$this->mViewData['data_tanggal']   = $this->Komoditas_model->get_tanggal();
		$this->mViewData['data_max']       = $this->Komoditas_model->get_max($id);
		$this->mViewData['data_min']       = $this->Komoditas_model->get_min($id);
		$this->mViewData['data_avg']       = $this->Komoditas_model->get_avg($id);
		$this->mViewData['tgl_awal']       = $tgl_awal;
		$this->mViewData['tgl_akhir']       = $tgl_akhir;
	}




}
