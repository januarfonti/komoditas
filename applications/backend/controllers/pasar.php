<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasar extends MY_Controller {

	public function index()
	{
		// CRUD table
		$this->load->helper('crud');
		$this->load->library('image_CRUD');    
		$crud = generate_crud('tb_pasar');
		$crud->set_subject('Pasar');
		$crud->set_field_upload('foto_pasar','assets/uploads');
		$crud->callback_before_upload(array($this, '_valid_images'));
		$this->mTitle = "Data Pasar";
		$this->mViewFile = '_partial/crud';
		$this->mViewData['crud_data'] = $crud->render();
	}

	public function _valid_images($files_to_upload, $field_info)
	{
	  if ($files_to_upload[$field_info->encrypted_field_name]['type'] != 'image/jpeg')
	  {
	   return 'Sorry, we can upload only PNG-images here.';
	  }
	  return true;
	}
}