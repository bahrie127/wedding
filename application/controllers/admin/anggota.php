<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Anggota extends CI_Controller{
    
	function __construct(){
		parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->model('m_login');
    }

    function index(){

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('anggota');
        $crud->set_subject('Anggota');
        
        $output = $crud->render();
        $this->load->view('admin/anggota',$output);
    }

	function add_anggota(){
        $id=$this->session->userdata('id_anggota');
        $pegawai=$this->m_login->get_pegawai_by_id($id);
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('anggota');

		$crud->set_relation('id_prov','provinsi','nama_provinsi');
        $crud->set_relation('id_kab','kabupaten','nm_kab');
        $crud->set_relation('gender','gender','keterangan');
		$crud->set_relation('id_jab','jabatan','nama_jabatan');
        $crud->set_relation('id_approved','approved','keterangan');
        $crud->set_relation('id_pendidikan','pendidikan','keterangan');
        $crud->set_relation('id_agama','agama','keterangan');

        $crud->columns('full_name','id_jab','id_prov','id_kab','gender','id_approved');
        $crud->fields('foto','full_name','tempat_lahir','tgl_lahir','gender','id_agama','no_ktp','alamat','id_prov','id_kab','kecamatan','email','telepon','hp','id_pendidikan','id_jab','tgl_join','id_approved');
        $crud->required_fields('full_name','tempat_lahir','tgl_lahir','gender','id_agama','no_ktp','alamat','id_prov','id_kab','kecamatan','email','telepon','hp','id_pendidikan','id_jab','tgl_join','id_approved');
        $crud->set_field_upload('foto','assets/uploads/files');
        $crud->display_as('id_prov','Provinsi');
		$crud->display_as('id_jab','Jabatan');
        $crud->display_as('full_name','Nama');
        $crud->display_as('id_kab','Kabupaten');
        $crud->display_as('gender','Jenis Kelamin');
        $crud->display_as('id_approved','Status');
        $crud->display_as('id_pendidikan','Pendidikan');
        $crud->display_as('id_agama','Agama');
        $crud->display_as('tgl_lahir','Tanggal Lahir');
        $crud->display_as('tgl_join','Tanggal Join');
        if($this->session->userdata('level')==2){
            $crud->where('anggota.id_prov',$pegawai->row()->id_prov);
        }
        elseif($this->session->userdata('level')==3){
            $crud->where('anggota.id_kab',$pegawai->row()->id_kab);
        }
        elseif($this->session->userdata('level')==4){
            $crud->unset_add();
            $crud->unset_delete();
            $crud->where('anggota.id_ang',$pegawai->row()->id_ang);
        }
		$crud->set_field_upload('foto','assets/uploads/files');
        $crud->set_subject('Anggota');
        

        $output = $crud->render();
        $this->load->view('admin/anggota', $output);
    }
	
	function user(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('login');
        $crud->set_relation('id_anggota','anggota','full_name');
        $crud->set_relation('id_level','level','keterangan');
        $crud->columns('id_anggota','username','id_level');
        $crud->fields('username','password','id_anggota','id_level');
        $crud->required_fields('username','password','id_anggota','id_level');
        $crud->change_field_type('password','password');
        $crud->display_as('id_anggota','Nama');
		$crud->display_as('username','Username');
        $crud->display_as('id_level','Otoritas');
        $crud->set_subject('User');
//        $crud->callback_before_insert(array($this, 'checking_post'));
//        $crud->callback_before_update(array($this, 'checking_post'));
        $output = $crud->render();
        $this->load->view('admin/anggota', $output);
    }

    function checking_post($post_array)
    {
        $post_array['password'] = md5($post_array['password']);

        return $post_array;
    }
}