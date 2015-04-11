<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Story extends CI_Controller{
    
	function __construct(){
		parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');

    }

    function index(){
        $id=$this->session->userdata('id');
        $crud = new grocery_CRUD();
        $id=$this->session->userdata('id');
        $crud->set_theme('datatables');
        $crud->set_table('tbl_story');
        $crud->where('login_id',$id);
        $crud->set_subject('Our Story');
		$crud->display_as('id','No');
        $crud->columns('id','story','foto_story');
        $crud->set_field_upload('foto_story','assets/uploads/files');
        $crud->field_type('login_id', 'hidden', $id);
        $crud->required_fields('tanggal_story','story','foto_story');
        $output = $crud->render();
        $this->load->view('admin/story',$output);
    }

	function add_jabatan(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('jabatan');
		$crud->set_subject('Jabatan');
        

        $output = $crud->render();
        $this->load->view('admin/jabatan', $output);
    }
	
}