<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Profile extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_login');
        $this->load->library('grocery_CRUD');

    }


    function index(){

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('profile');
        $crud->columns('isi');
        $crud->display_as('isi','Profile');
        $crud->unset_add();
        $crud->unset_delete();
        $crud->set_subject('Profile');
        
        $output = $crud->render();
        $this->load->view('admin/profile',$output);
    }




}