<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Invite extends CI_Controller{
    
	function __construct(){
		parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');

    }

    function index(){
//        echo base_url();
//        exit;
        $id=$this->session->userdata('id');
        $crud = new grocery_CRUD();
        $id=$this->session->userdata('id');
        $crud->set_theme('datatables');
        $crud->set_table('tbl_invite');
        $crud->where('tbl_invite.login_id',$id);
        $crud->set_subject('Invite');
		$crud->display_as('id','No');
        $crud->field_type('login_id', 'hidden', $id);
        $crud->field_type('url', 'hidden');
        $crud->field_type('url_name', 'hidden');
        $crud->columns('id','nama','cover','url');
        $crud->set_field_upload('cover','assets/uploads/files');
        $crud->required_fields('nama','cover');

        $crud->callback_before_insert(function($post_array){
            $post_array['url'] = base_url().'index.php/happy/invitation/'.str_replace(' ', '', $post_array['nama']);
            $post_array['url_name'] = str_replace(' ', '', $post_array['nama']);
            return $post_array;
        });
        $output = $crud->render();
        $this->load->view('admin/invite',$output);
    }

	
}