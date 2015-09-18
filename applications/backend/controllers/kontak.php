<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_kontak');
		$crud->set_subject('Halaman Kontak');
		$crud->unset_add();
		$crud->unset_delete();
		$this->mTitle = "Halaman Kontak";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}