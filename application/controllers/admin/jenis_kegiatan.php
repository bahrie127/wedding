<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Jenis_Kegiatan extends CI_Controller{
    
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
        $crud->set_table('jenis_kegiatan');
        $crud->set_subject('Jenis Kegiatan');
		$crud->display_as('nama_jkg','Jenis Kegiatan');
        
        $output = $crud->render();
        $this->load->view('admin/jenis_kegiatan',$output);
    }

	function add_jabatan(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('jenis_kegiatan');
		$crud->set_subject('Jabatan');
        

        $output = $crud->render();
        $this->load->view('admin/jenis_kegiatan', $output);
    }
	
}