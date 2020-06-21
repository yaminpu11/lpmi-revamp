<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_branda extends CI_Model{

	public function __construct()
    {
        parent::__construct();
        // Load database prodi
        $this->load->library('JWT');
        
    }

    
    function list_allcategory(){
		$hasil= $this->db->query('SELECT cat.ID,cat.Name,COUNT(co.IDCat) jml FROM db_lpmi.category cat 
                                    LEFT JOIN db_lpmi.content co on cat.ID=co.IDCat
                                    GROUP BY cat.ID,cat.Name')->result();
		return $hasil;
	}

    function countcategory(){
        $hasil= $this->db->query('SELECT co.IDCat,COUNT(cat.Name) jml FROM db_lpmi.category cat 
                                    INNER JOIN db_lpmi.content co on cat.ID=co.IDCat
                                    GROUP BY cat.ID')->result();
        return $hasil;
    }

}

?>