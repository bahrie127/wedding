<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->model('m_login');
        $this->load->model('m_wedding');
    }

    function index(){
        $id=$this->session->userdata('id');
        $data['link']=$this->m_wedding->get_link_by_id($id)->row();
       // echo $link;
      //  exit;

            $this->load->view('admin/dashboard',$data);

    }

}