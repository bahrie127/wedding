<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Kabupaten extends CI_Controller{
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
        $crud->set_table('kabupaten');
		$crud->set_relation('id_prov','provinsi','nama_provinsi');
        $crud->set_subject('Kabupaten');
		$crud->display_as('nm_kab','Nama Kabupaten');
		$crud->display_as('id_prov','Nama Provinsi');

		        
        $output = $crud->render();
        $this->load->view('admin/kabupaten',$output);
    }

	function add_jabatan(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('kabupaten');
		$crud->set_relation('id_prov','provinsi','nama_provinsi');
		$crud->set_subject('Kabupaten');
		$crud->display_as('id_prov','Nama Provinsi');
		$crud->display_as('nm_kab','Nama Kabupaten');
		

        $output = $crud->render();
        $this->load->view('admin/kabupaten', $output);
    }


}