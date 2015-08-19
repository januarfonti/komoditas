<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_berita');
		$crud->set_subject('Berita');
		$this->mTitle = "Data Berita";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}