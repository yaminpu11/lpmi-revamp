<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class C_dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        // header('Content-Type: application/json');
        $this->load->model('m_branda');
    }


    function index(){

        $page = '';
        $data["pageTitle"] = "Dashboard";
        // $data['record']=$this->m_branda->list_trending();
        // $data['getslider']=$this->m_branda->count_slider();
        // $data['visi'] = $this->m_branda->visi();

        $content = $this->load->view('template/V_home','',true);
        parent::template($content);
    }

    function getLanguagelabels(){

        $lang = $this->input->get('lang');


        $dataLang = $this->db->get_where('db_lpmi.language',array(
            'Code' => $lang
        ))->result_array();

        if(count($dataLang)>0){

            $d = $dataLang[0];

            $data = $this->db->query('SELECT ci.ContentName, ct.Label FROM db_lpmi.content_type ct
                  LEFT JOIN db_lpmi.content_index ci ON (ct.LangIndexID = ci.ID)
                  WHERE ct.LangID = "'.$d['ID'].'" ')->result_array();

            $res = array();
            foreach ($data AS $item){
                $res[$item['ContentName']] = $item['Label'];
            }

            $result = array(
                $d['Code'] => $res
            );

            return print_r(json_encode($result));


        } else {
            return print_r(json_encode(array(
                $lang => array()
            )));
        }

    }
    

    function page_404(){
          $content = $this->load->view("template/404",'',false);
        }

    function vision_mision()
    {
      // $data['visi_misi'] = $this->m_branda->visi();
      $content = $this->load->view('template/V_vision_mision','',true);
      parent::template($content);
    }

    function structure()
    {
      $content = $this->load->view('template/coming_soon','',true);
      parent::template($content);
    }
    
    function committee()
    {
      $content = $this->load->view('template/V_committee','',true);
      parent::template($content);
    }

    function target_program()
    {
      $content = $this->load->view('template/V_target_program','',true);
      parent::template($content);
    }

    function news()
    {
      $content = $this->load->view('template/V_news','',true);
      parent::template($content);
    }

    function details_news()
    {
      $content = $this->load->view('template/V_detail','',true);
      parent::template($content);
    }

    function event()
    {
      $content = $this->load->view('template/V_agenda','',true);
      parent::template($content);
    }

    function knowledge()
    {

      $data['allcategory'] = $this->m_branda->list_allcategory();
      $content = $this->load->view('template/V_knowledge',$data,true);
      parent::template($content);
    }

    function acreditas()
    {
      $content = $this->load->view('template/coming_soon','',true);
      parent::template($content);
    }

    function gallery()
    {
      $content = $this->load->view('template/V_gallery','',true);
      parent::template($content);
    }

    public function search(){
      $data['search'] = $this->input->get('value');
      $content = $this->load->view('template/V_search',$data,true);
      parent::template($content);
    }

}

?>