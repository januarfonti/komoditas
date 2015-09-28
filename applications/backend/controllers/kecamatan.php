<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kecamatan extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_kecamatan');
		$crud->set_subject('Data Kecamatan');
		$this->mTitle = "Data Kecamatan";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}