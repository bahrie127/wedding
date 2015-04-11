<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_wedding');
    }

    function index(){
        $data['error']="";
        $this->load->view('login-page',$data);
    }

    function login_in(){
        if($this->auth->do_login($this->input->POST('user'),$this->input->POST('pass'))){

            $id=$this->session->userdata('id');
            $data['link']=$this->m_wedding->get_link_by_id($id)->row();
            $this->load->view('admin/dashboard',$data);
//            }
            //$this->load->view('login-page',$data);
        }else{
            $data['error']="username dan password salah";
            $this->load->view('login-page',$data);
        }

    }

    function logout(){
        $this->session->sess_destroy();
		$data['error']="";
        $this->load->view('login-page',$data);
    }


}