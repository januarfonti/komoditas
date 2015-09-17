<?php 

class Komoditas_model extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    

    function get_detailhargapasar($id_jenisbahanpokok,$id_pasar)
    {
        $query = $this->db->query("SELECT *
                                    FROM
                                    tb_hargakomoditas
                                    INNER JOIN tb_bahanpokok ON tb_hargakomoditas.id_bahanpokok = tb_bahanpokok.id_bahanpokok
                                    INNER JOIN tb_pasar ON tb_hargakomoditas.id_pasar = tb_pasar.id_pasar
                                    INNER JOIN tb_jenisbahanpokok ON tb_hargakomoditas.id_jenisbahanpokok = tb_jenisbahanpokok.id_jenisbahanpokok
                                    where tb_hargakomoditas.id_jenisbahanpokok = $id_jenisbahanpokok 
                                    AND tb_hargakomoditas.id_pasar = $id_pasar 
                                    AND MONTH(tgl_update) = MONTH(CURDATE())");
       return $query->result();
    }

    function get_detailhargapasar1($id_pasar,$id_jenisbahanpokok)
    {
        $query = $this->db->query("SELECT *
                                    FROM
                                    tb_hargakomoditas
                                    INNER JOIN tb_bahanpokok ON tb_hargakomoditas.id_bahanpokok = tb_bahanpokok.id_bahanpokok
                                    INNER JOIN tb_pasar ON tb_hargakomoditas.id_pasar = tb_pasar.id_pasar
                                    INNER JOIN tb_jenisbahanpokok ON tb_hargakomoditas.id_jenisbahanpokok = tb_jenisbahanpokok.id_jenisbahanpokok
                                    where tb_hargakomoditas.id_jenisbahanpokok = $id_jenisbahanpokok AND tb_hargakomoditas.id_pasar = $id_pasar AND MONTH(tgl_update) = MONTH(CURDATE())");
       return $query->result();
    }

    function get_caridetailhargapasar1($id_pasar,$id_jenisbahanpokok, $tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT *
                                    FROM
                                    tb_hargakomoditas
                                    INNER JOIN tb_bahanpokok ON tb_hargakomoditas.id_bahanpokok = tb_bahanpokok.id_bahanpokok
                                    INNER JOIN tb_pasar ON tb_hargakomoditas.id_pasar = tb_pasar.id_pasar
                                    INNER JOIN tb_jenisbahanpokok ON tb_hargakomoditas.id_jenisbahanpokok = tb_jenisbahanpokok.id_jenisbahanpokok
                                    where tb_hargakomoditas.id_jenisbahanpokok = $id_jenisbahanpokok AND tb_hargakomoditas.id_pasar = $id_pasar
                                    AND tb_hargakomoditas.tgl_update BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ");
       return $query->result();
    }

    function get_caritanggal($id_jenisbahanpokok,$id_pasar,$tgl_awal,$tgl_akhir)
    {
        $query = $this->db->query("SELECT *
                                    FROM
                                    tb_hargakomoditas
                                    INNER JOIN tb_bahanpokok ON tb_hargakomoditas.id_bahanpokok = tb_bahanpokok.id_bahanpokok
                                    INNER JOIN tb_pasar ON tb_hargakomoditas.id_pasar = tb_pasar.id_pasar
                                    INNER JOIN tb_jenisbahanpokok ON tb_hargakomoditas.id_jenisbahanpokok = tb_jenisbahanpokok.id_jenisbahanpokok
                                    where tb_hargakomoditas.id_jenisbahanpokok = $id_jenisbahanpokok 
                                    AND tb_hargakomoditas.id_pasar = $id_pasar 
                                    AND tb_hargakomoditas.tgl_update BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ");

        return $query->result();
    }

    function get_caridetailharga($id,$tgl_awal,$tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_hargakomoditas');
        $this->db->where('tb_hargakomoditas.id_jenisbahanpokok',$id);
        $this->db->where('tgl_update >=', $tgl_awal);
        $this->db->where('tgl_update <=', $tgl_akhir);
        $this->db->join('tb_bahanpokok', 'tb_bahanpokok.id_bahanpokok = tb_hargakomoditas.id_bahanpokok','inner');
        $this->db->join('tb_pasar', 'tb_pasar.id_pasar = tb_hargakomoditas.id_pasar','inner');
        $this->db->join('tb_jenisbahanpokok', 'tb_jenisbahanpokok.id_jenisbahanpokok = tb_hargakomoditas.id_jenisbahanpokok','inner');
        //$this->db->group_by('tb_hargakomoditas.id_pasar');
        $query = $this->db->get();
        return $query->result();
    }

    function get_detailharga($id)
    {
        $this->db->select('*');
        $this->db->from('tb_hargakomoditas');
        $this->db->where('tb_hargakomoditas.id_jenisbahanpokok',$id);
        $this->db->join('tb_bahanpokok', 'tb_bahanpokok.id_bahanpokok = tb_hargakomoditas.id_bahanpokok','inner');
        $this->db->join('tb_pasar', 'tb_pasar.id_pasar = tb_hargakomoditas.id_pasar','inner');
        $this->db->join('tb_jenisbahanpokok', 'tb_jenisbahanpokok.id_jenisbahanpokok = tb_hargakomoditas.id_jenisbahanpokok','inner');
        $this->db->group_by('tb_hargakomoditas.id_pasar');
        $query = $this->db->get();
        return $query->result();
    }


    function get_tanggal($id)
    {
        $query = $this->db->query("SELECT DISTINCT(tgl_update) from tb_hargakomoditas WHERE MONTH(tgl_update) = MONTH(CURDATE()) AND id_jenisbahanpokok = $id ORDER BY tgl_update ASC");
        return $query->result();   
    }

    function get_tanggal_pasar($id)
    {
        $query = $this->db->query("SELECT DISTINCT(tgl_update) from tb_hargakomoditas WHERE MONTH(tgl_update) = MONTH(CURDATE()) AND id_pasar = $id ORDER BY tgl_update ASC");
        return $query->result();   
    }

    function get_max($id)
    {
        $query = $this->db->query("SELECT MAX(harga) as harga_max from tb_hargakomoditas where id_jenisbahanpokok = $id AND YEARWEEK(tgl_update, 1) = YEARWEEK(CURDATE(), 1)");
        return $query->row();
    }

    function get_min($id)
    {
        $query = $this->db->query("SELECT MIN(harga) as harga_min from tb_hargakomoditas where id_jenisbahanpokok = $id AND YEARWEEK(tgl_update, 1) = YEARWEEK(CURDATE(), 1)");
        return $query->row();
    }

    function get_avg($id)
    {
        $query = $this->db->query("SELECT AVG(harga) as harga_avg from tb_hargakomoditas where id_jenisbahanpokok = $id AND YEARWEEK(tgl_update, 1) = YEARWEEK(CURDATE(), 1)");
        return $query->row();
    }

    function get_pasar()
    {
        return $this->db->get('tb_pasar')->result();
    }

    function get_rataratahariini()
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, b.nama_bahan_pokok, c.nama_jenis_bahan_pokok, ROUND(AVG(a.harga)) AS harga_ratarata, a.tgl_update, c.foto_jenis_bahan_pokok, a.satuan
                                FROM
                                tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c
                                WHERE
                                b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                AND a.`tgl_update` = (SELECT MAX(tb_hargakomoditas.`tgl_update`) FROM tb_hargakomoditas WHERE tb_hargakomoditas.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`)
                                GROUP BY a.id_jenisbahanpokok");
        return $query->result();
    }

    function get_ratarataharikemarin()
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, b.nama_bahan_pokok, c.nama_jenis_bahan_pokok, ROUND(AVG(a.harga)) AS harga_ratarata, a.tgl_update, c.foto_jenis_bahan_pokok
                                FROM
                                tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c
                                WHERE
                                b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                AND a.`tgl_update` = (SELECT MAX(tb_hargakomoditas.`tgl_update`) -  INTERVAL 1 DAY  FROM tb_hargakomoditas WHERE tb_hargakomoditas.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`)
                                GROUP BY a.id_jenisbahanpokok");
        return $query->result();
    }

    function get_rataratapasarterakhir($id)
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, a.id_pasar, b.nama_bahan_pokok, c.nama_jenis_bahan_pokok, a.harga AS harga_ratarata, a.tgl_update, c.foto_jenis_bahan_pokok, a.satuan, d.foto_pasar
                                FROM
                                tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c, tb_pasar d
                                WHERE
                                b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                AND
                                d.`id_pasar` = a.`id_pasar`
                                AND a.`tgl_update` = (SELECT MAX(tb_hargakomoditas.`tgl_update`) FROM tb_hargakomoditas WHERE tb_hargakomoditas.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`)
                                AND a.id_pasar = $id
                                GROUP BY a.id_jenisbahanpokok
");
        return $query->result();
    }

    function get_rataratapasarkemarin($id)
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, a.id_pasar, b.nama_bahan_pokok, c.nama_jenis_bahan_pokok, a.harga AS harga_ratarata, a.tgl_update, c.foto_jenis_bahan_pokok
                                    FROM
                                    tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c
                                    WHERE
                                    b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                    AND a.`tgl_update` = (SELECT MAX(tb_hargakomoditas.`tgl_update`) -  INTERVAL 1 DAY  FROM tb_hargakomoditas WHERE tb_hargakomoditas.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`)
                                    AND a.id_pasar = $id
                                    GROUP BY a.id_jenisbahanpokok");
        return $query->result();
    }

     function get_namakomoditas($id)
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, c.nama_jenis_bahan_pokok
                                FROM
                                tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c, tb_pasar d
                                WHERE
                                b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                AND
                                d.`id_pasar` = a.`id_pasar`
                                AND a.id_pasar = $id
                                GROUP BY a.id_jenisbahanpokok
                                ");
        return $query->result();
    }

    function get_carinamakomoditas($id,$tgl_awal,$tgl_akhir)
    {
        $query = $this->db->query("SELECT a.id_jenisbahanpokok, c.nama_jenis_bahan_pokok
                                FROM
                                tb_hargakomoditas a, tb_bahanpokok b, tb_jenisbahanpokok c, tb_pasar d
                                WHERE
                                b.`id_bahanpokok` = a.`id_bahanpokok` AND c.`id_jenisbahanpokok` = a.`id_jenisbahanpokok`
                                AND
                                d.`id_pasar` = a.`id_pasar`
                                AND a.id_pasar = $id
                                
                                ");
        return $query->result();
    }

}