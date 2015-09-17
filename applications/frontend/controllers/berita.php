<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komoditas_model','Berita_model');
		$this->load->library('Ajax_pagination');
        $this->perPage = 3;
	}
	public function index()
	{
		$data                           = array();
		$totalRec                       = count($this->Berita_model->get_berita());
		$config['div']                  = 'postList'; //parent div tag id
		$config['full_tag_open']        = "<ul class='pagination'>";
		$config['full_tag_close']       ="</ul>";
		$config['num_tag_open']         = '<li>';
		$config['num_tag_close']        = '</li>';
		$config['cur_tag_open']         = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close']        = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open']        = "<li>";
		$config['next_tagl_close']      = "</li>";
		$config['prev_tag_open']        = "<li>";
		$config['prev_tagl_close']      = "</li>";
		$config['first_tag_open']       = "<li>";
		$config['first_tagl_close']     = "</li>";
		$config['last_tag_open']        = "<li>";
		$config['last_tagl_close']      = "</li>";
		$config['base_url']             = base_url().'berita/ajaxPaginationData';
		$config['total_rows']           = $totalRec;
		$config['per_page']             = $this->perPage;
		$this->ajax_pagination->initialize($config);
		$this->mTitle                   = "Berita";
		$this->mViewFile                = 'berita';
		$this->mViewData['data_berita'] = $this->Berita_model->get_berita(array('limit'=>$this->perPage));
	}

	public function detail($id)
	{
		$this->mLayout                   = "home";
		$this->mTitle                    = "Detail Berita";
		$this->mViewFile                 = 'detail_berita';
		$this->mViewData['data_berita']  = $this->Berita_model->get_detailberita($id);
		$this->mViewData['data_tanggal'] = $this->Komoditas_model->get_tanggal($id);
		
	}

	 function ajaxPaginationData()
    {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
		$totalRec                       = count($this->Berita_model->get_berita());
		
		//pagination configuration
		$config['div']                  = 'postList'; //parent div tag id
		$config['full_tag_open']        = "<ul class='pagination'>";
		$config['full_tag_close']       ="</ul>";
		$config['num_tag_open']         = '<li>';
		$config['num_tag_close']        = '</li>';
		$config['cur_tag_open']         = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close']        = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open']        = "<li>";
		$config['next_tagl_close']      = "</li>";
		$config['prev_tag_open']        = "<li>";
		$config['prev_tagl_close']      = "</li>";
		$config['first_tag_open']       = "<li>";
		$config['first_tagl_close']     = "</li>";
		$config['last_tag_open']        = "<li>";
		$config['last_tagl_close']      = "</li>";
		$config['base_url']             = base_url().'berita/ajaxPaginationData';
		$config['total_rows']           = $totalRec;
		$config['per_page']             = $this->perPage;
		
		$this->ajax_pagination->initialize($config);
		//load the view
		$this->mLayout                  = "kosong";
		$this->mViewFile                = 'ajax-pagination-data';
		$this->mViewData['data_berita'] = $this->Berita_model->get_berita(array('start'=>$offset,'limit'=>$this->perPage));
    }

	
}
