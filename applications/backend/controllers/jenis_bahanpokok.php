<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_bahanpokok extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_jenisbahanpokok');
		$crud->set_subject('Data Jenis Bahan Pokok');
		$crud->set_field_upload('foto_jenis_bahan_pokok','assets/uploads');
		$crud->callback_before_upload(array($this, '_valid_images'));
		$this->mTitle = "Data Jenis Bahan Pokok";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}