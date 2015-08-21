<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model', 'berita');
	}
	public function index()
	{
		$this->mTitle = "Berita";
		$this->mViewFile = 'berita';
		$this->mViewData['data_berita'] = $this->berita->get_all();
	}
}