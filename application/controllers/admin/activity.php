<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Activity extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_login');
        $this->load->library('grocery_CRUD');

    }


    function index(){
        $id=$this->session->userdata('id_anggota');
        $pegawai=$this->m_login->get_pegawai_by_id($id);
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('track_record');
        $crud->set_relation('id_ang','anggota','full_name');
        $crud->set_relation('id_jenis_kegiatan','jenis_kegiatan','nama_jkg');
        //$crud->where('id_prov',$pegawai->row()->id_prov);
//        if($this->session->userdata('level')==2){
//            $crud->where('anggota.id_prov',$pegawai->row()->id_prov);
//        }
//        elseif($this->session->userdata('level')==3){
//            $crud->where('anggota.id_kab',$pegawai->row()->id_kab);
//        }
        $crud->set_subject('Activity');
        $crud->display_as('tgl_keg','Tanggal Kegiatan');
        $crud->display_as('id_ang','Nama');
        $crud->display_as('id_jenis_kegiatan','Jenis Kegiatan');
        
        $output = $crud->render();
        $this->load->view('admin/activity',$output);
    }

    
     function _pemasukan_fill_now()
    {
        $data=$this->m_laporan->get_pemasukan_perday();

        return '<input name="pemasukan" type="text" value="'. $data[0]->harga. '" >';
    }

    function _tanggal()
    {

        return '<input name="tanggal" type="text" value="'. date("d/m/Y"). '" >';
    }


}