<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Foto extends CI_Controller{
    
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
        $crud->set_table('tbl_foto');
        $crud->set_relation('tbl_foto_type_id','tbl_foto_type','nama');
        $crud->where('tbl_foto.login_id',$id);
        $crud->set_subject('Foto');
		$crud->display_as('id','No');
        $crud->display_as('tbl_foto_type_id','Type Foto');
        $crud->field_type('login_id', 'hidden', $id);
        $crud->columns('id','foto','header','tbl_foto_type_id');
        $crud->set_field_upload('foto','assets/uploads/files');
        $crud->required_fields('foto','header','tbl_foto_type_id');
        $output = $crud->render();
        $this->load->view('admin/foto',$output);
    }

	
}