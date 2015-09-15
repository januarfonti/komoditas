<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model','Berita_model');
	}
	public function index()
	{
		//$this->mLayout                  = "home";
		$this->mTitle                   = "Berita";
		$this->mViewFile                = 'berita';
		$this->mViewData['data_berita'] = $this->Berita_model->get_berita();
	}

	public function detail($id)
	{
		$this->mLayout                               = "home";
		$this->mTitle                      = "Detail Berita";
		$this->mViewFile                   = 'detail_berita';
		$this->mViewData['data_berita']     = $this->Berita_model->get_detailberita($id);
		$this->mViewData['data_tanggal']   = $this->Komoditas_model->get_tanggal($id);
		
	}

	
}
