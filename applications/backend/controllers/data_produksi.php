<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_produksi extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_dataproduksi');
		$crud->set_subject('Data Produksi');
		$crud->set_relation('id_kecamatan','tb_kecamatan','nama_kecamatan');
		$crud->display_as('id_kecamatan','Nama Kecamatan');
		$this->mTitle = "Data Produksi";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}