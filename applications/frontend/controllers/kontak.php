<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model','Berita_model');
	}
	public function index()
	{
		$this->mTitle                   = "Kontak";
		$this->mViewFile                = 'kontak';
		$this->mViewData['data_kontak'] = $this->Komoditas_model->get_kontak();
	}	
}
