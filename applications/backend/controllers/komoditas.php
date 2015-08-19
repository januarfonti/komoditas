<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komoditas extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$crud = generate_crud('tb_hargakomoditas');
		$crud->set_relation('id_bahanpokok','tb_bahanpokok','nama_bahan_pokok');
		$crud->display_as('id_bahanpokok','Nama Bahan Pokok');
		$crud->set_relation('id_jenisbahanpokok','tb_jenisbahanpokok','nama_jenis_bahan_pokok');
		$crud->display_as('id_jenisbahanpokok','Jenis');
		$crud->set_relation('id_pasar','tb_pasar','nama_pasar');
		$crud->display_as('id_pasar','Pasar');
		$crud->set_subject('Data Komoditas');
		$crud->required_fields('id_bahanpokok','id_jenisbahanpokok','id_pasar','satuan','tgl_update','harga');
		$this->mTitle = "Data Komoditas";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}
}