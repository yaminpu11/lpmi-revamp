<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_apilpmi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        // $this->load->model('m_api');
        // $this->load->model('m_rest');
        // $this->load->model('akademik/m_tahun_akademik');
        // $this->load->model('master/m_master');
        // $this->load->model('admin-prodi/beranda/m_home');

        $this->load->library('JWT');
        $this->load->library('google');
    }

    private function getInputToken()
    {
        $token = $this->input->post('token');
        $key = "s3Cr3T-G4N";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }

    private function getInputToken2()
    {
        $token = $this->input->post('token');
        $key = "UAP)(*";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }

    public function is_url_exist($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    public function GetDataContent(){
        $data_arr = $this->getInputToken2();
        $IDType = $data_arr['IDType'];
        $lang = $data_arr['LangCode'];

        $sql = 'select ci.* from db_lpmi.content_index AS ci
                WHERE ci.SegmentMenu="'.$IDType.'" ';
        $query=$this->db->query($sql, array())->result_array();
        $idindex = $query[0]['ID'];
        
        print_r($idindex).die();
        $data = $this->db->query('SELECT c.*, l.language, ct.Label , ci.SegmentMenu 
            FROM db_lpmi.content c 
            LEFT JOIN db_lpmi.content_type ct ON (ct.ID = c.IDindex)
            LEFT JOIN db_lpmi.content_index ci ON (ci.ID = c.IDindex)
            LEFT JOIN db_lpmi.language l ON (l.ID = ct.LangID)
            WHERE c.IDindex ='.$idindex.' and c.Lang="'.$lang.'" and c.Status="Yes" ')->result_array();

        return print_r(json_encode($data));
    }

}
