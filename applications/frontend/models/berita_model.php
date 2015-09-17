<?php 

class Berita_model extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_berita($params = array())
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('status','1');
        $this->db->order_by("tgl_update", "desc"); 
        $this->db->order_by("id_berita", "desc"); 
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

    function get_berita_depan()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('status','1');
        $this->db->order_by("tgl_update", "desc"); 
        $this->db->order_by("id_berita", "desc"); 
        $this->db->limit(2);
        return $this->db->get()->result();
    }

    function get_detailberita($id)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('id_berita',$id);
        $this->db->where('status','1');
        return $this->db->get()->row();
    }

   
}