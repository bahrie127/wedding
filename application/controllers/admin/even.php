<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Even extends CI_Controller{
    
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
        $crud->set_table('tbl_wedding');
        $crud->where('login_id',$id);
        //$crud->set_relation('id_customer','customer','nama');
        $crud->set_subject('Event');
		$crud->display_as('id','No');
        $crud->display_as('portfolio_wanita','Portfolio Wanita');
        $crud->display_as('portfolio_pria','Portfolio Pria');
        $crud->field_type('login_id', 'hidden', $id);
        $crud->columns('id','mempelai_wanita','mempelai_pria','waktu_resepsi');
        $crud->set_field_upload('foto_wanita','assets/uploads/files');
        $crud->set_field_upload('foto_pria','assets/uploads/files');
        $crud->required_fields('mempelai_wanita','mempelai_pria','foto_wanita','foto_pria','portfolio_wanita','portfolio_pria','tempat_resepsi','waktu_pernikahan','waktu_resepsi','kata_kata');
        $crud->unset_add();
        $crud->unset_delete();
        $crud->unset_export();
        $crud->unset_print();

        $output = $crud->render();
        $this->load->view('admin/event',$output);
    }


}