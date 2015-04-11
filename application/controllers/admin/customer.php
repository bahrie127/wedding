<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Customer extends CI_Controller{
    
	function __construct(){
		parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');

    }

    function index(){

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('customer');
        $crud->set_subject('Customer');
		$crud->display_as('id','No');
        
        $output = $crud->render();
        $this->load->view('admin/customer',$output);
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