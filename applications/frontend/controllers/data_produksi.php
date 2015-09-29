<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_produksi extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model','Berita_model');
	}
	public function index()
	{
		if ($this->input->post('bulan')   == '') 
		{
			$bln                              = date("m");
			$bulan                            = bulan($bln);
			$tahun                            = date("Y");
		}
		else
		{
			$bulan                            = $this->input->post('bulan');
			$tahun                            = $this->input->post('tahun');
		}
		$this->mTitle                     = "Data Produksi";
		$this->mViewFile                  = 'data_produksi';
		$this->mViewData['data_produksi'] = $this->Komoditas_model->get_dataproduksi($bulan,$tahun);
		$this->mViewData['luas_lahan'] 	  = $this->Komoditas_model->get_luaslahan($bulan,$tahun);
		$this->mViewData['bulan']         = $bulan;
		$this->mViewData['tahun']         = $tahun;
	}	
}
