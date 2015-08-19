<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahan_pokok extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_bahanpokok');
		$crud->set_subject('Data Bahan Pokok');
		$this->mTitle = "Data Bahan Pokok";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}