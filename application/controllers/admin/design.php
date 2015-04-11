<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Design extends CI_Controller{
    
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
        $crud->set_table('tbl_desaign');
        $crud->set_relation('type_desaign','tbl_desaign_type','nama');
        $crud->where('tbl_desaign.login_id',$id);
        $crud->set_subject('Design');
		$crud->display_as('id','No');
        $crud->columns('id','type_desaign');
        $crud->unset_add();
        $crud->unset_delete();
        $crud->field_type('login_id', 'hidden', $id);
        $crud->required_fields('type_desaign');
        $output = $crud->render();
        $this->load->view('admin/story',$output);
    }


}