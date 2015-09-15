<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->mLayout                  = "home";
		$this->mTitle                   = "Berita";
		$this->mViewFile                = 'berita';
		$this->mViewData['data_berita'] = $this->Berita_model->get_berita();
	}

	public function detail_oke()
	{
		$this->mViewFile                = 'detail_berita';
		$data_berita = $this->Berita_model->get_detailberita();
		//print_r($data_berita);
	}
}