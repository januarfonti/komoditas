<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_tentang');
		$crud->set_subject('Halaman Tentang Sikompa');
		$crud->unset_add();
		$crud->unset_delete();
		$this->mTitle = "Halaman Tentang Sikompa";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}