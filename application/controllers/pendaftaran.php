<?php
/**
 * Created by JetBrains PhpStorm.
 * User: saifulbahri
 * Date: 3/11/14
 * Time: 8:26 PM
 * To change this template use File | Settings | File Templates.
 */

class Pendaftaran extends CI_Controller{

    var $date;

    function __construct(){
        parent::__construct();
       // $this->auth->restrict();
      //  $this->load->database();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('form_validation');
       // $this->load->library('grocery_CRUD');
        $this->load->model('m_daftar');

    }

    public function index() {

        $data['provinsi'] = $this->m_daftar->get_provinsi()->result();
        $data['kabupaten'] = $this->m_daftar->get_kabupaten()->result();
        $data['jabatan'] = $this->m_daftar->get_jabatan()->result();
        $data['pendidikan'] = $this->m_daftar->get_pendidikan()->result();
        $data['agama'] = $this->m_daftar->get_agama()->result();
        //$data['cek'] = "";
        //$data['status'] = "";
        $this->load->view('header');
        $this->load->view('content/daftarpeserta',$data);
        $this->load->view('footer');
    }

    public function daftar(){
        $datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);
        $tahunlahir = $this->input->post('tahun');
        $bulanlahir = $this->input->post('bulan');
        $tanggallahir = $this->input->post('tanggal');
        $lahir = "$tahunlahir-$bulanlahir-$tanggallahir";

        $this->form_validation->set_rules('name', 'Full Name', 'required|xss_clean');
        $this->form_validation->set_rules('ktp', 'No KTP', 'required|xss_clean');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|xss_clean');
        $this->form_validation->set_rules('hp', 'HP', 'required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|xss_clean');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|xss_clean');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|xss_clean');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == TRUE) {
        $dataUser = array(
            'full_name' => $this->input->post('name'),
            'no_ktp' => $this->input->post('ktp'),
            'gender' => $this->input->post('gender'),
            'tgl_lahir' => $lahir,
            'hp' => $this->input->post('hp'),
            'id_jab' => $this->input->post('id_jab'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'tempat_lahir' => $this->input->post('tampat_lahir'),
            'id_agama' => $this->input->post('id_agama'),
            'alamat' => $this->input->post('alamat'),
            'id_kab' => $this->input->post('id_kab'),
            'kecamatan' => $this->input->post('kecamatan'),
            'telepon' => $this->input->post('telepon'),
            'id_pendidikan' => $this->input->post('id_pendidikan'),
            'id_prov' => $this->input->post('id_prov'),
            'email' => $this->input->post('email'),
            'id_approved' => 0,
            'tgl_join' => $date
        );
        $this->m_daftar->add($dataUser);
            $idAnggota=$this->m_daftar->get_id_by_ktp($this->input->post('ktp'))->id_ang;
            $dataLogin=array('username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'id_anggota'=>$idAnggota,
                'id_level'=>4

            );
            $this->m_daftar->add_login($dataLogin);
        $this->load->view('header');
        $this->load->view('content/daftarsukses');
        $this->load->view('footer');
        }else{
            $data['provinsi'] = $this->m_daftar->get_provinsi()->result();
            $data['kabupaten'] = $this->m_daftar->get_kabupaten()->result();
            $data['jabatan'] = $this->m_daftar->get_jabatan()->result();
            $data['pendidikan'] = $this->m_daftar->get_pendidikan()->result();
            $data['agama'] = $this->m_daftar->get_agama()->result();
            $this->load->view('header');
            $this->load->view('content/daftarpeserta',$data);
            $this->load->view('footer');
        }
    }

    public function chart(){

       // $data=$this->m_daftar->get_all();
        //echo $data->row(3)->agama;
        $this->load->view('header');
        $this->load->view('admin/laporan');
        $this->load->view('footer');
        //echo json_encode($data['data']);
//        $this->output
//            ->set_content_type('application/json')
//            ->set_output(json_encode($data));
    }

}