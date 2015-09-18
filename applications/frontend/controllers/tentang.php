<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model','Berita_model');
	}
	public function index()
	{
		$this->mTitle                   = "Tentang";
		$this->mViewFile                = 'tentang';
		$this->mViewData['data_tentang'] = $this->Komoditas_model->get_tentang();
	}	
}
