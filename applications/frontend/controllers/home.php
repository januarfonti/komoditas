<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->mLayout                               = "home";
		$this->mTitle                                = "Home";
		$this->mViewFile                             = 'home';
		$this->mViewData['data_rataratahariini']     = $this->Komoditas_model->get_rataratahariini();
		$this->mViewData['data_ratarataharikemarin'] = $this->Komoditas_model->get_ratarataharikemarin();
		$this->mViewData['data_berita']              = $this->Berita_model->get_berita();
	}
}