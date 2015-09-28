<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Luas_lahan extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_luaslahan');
		$crud->set_subject('Data Luas Lahan');
		$crud->set_relation('id_kecamatan','tb_kecamatan','nama_kecamatan');
		$crud->display_as('id_kecamatan','Nama Kecamatan');
		$this->mTitle = "Data Luas Lahan";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}