<?php 

class Berita_model extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_berita()
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('status','1');
        $this->db->order_by("tgl_update", "desc"); 
        $this->db->order_by("id_berita", "desc"); 
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