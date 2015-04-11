<?php
/**
 * Created by JetBrains PhpStorm.
 * User: saifulbahri
 * Date: 3/11/14
 * Time: 10:24 PM
 * To change this template use File | Settings | File Templates.
 */

class M_daftar extends CI_Model{

    function index(){

    }

    function add($data){
        $insert=$this->db->insert('anggota',$data);
        return $insert;
    }

    function get_all(){
        $query=$this->db->get('anggota');
        if ($query->num_rows() > 0)
        {
            $row = $query->row();

        }
        return $row;
    }

    function get_provinsi(){
        $query=$this->db->get('provinsi');
        return $query;
    }

    function get_kabupaten(){
        $query=$this->db->get('kabupaten');
        return $query;
    }

    function get_jabatan(){
        $query=$this->db->get('jabatan');
        return $query;
    }

    function get_agama(){
        $query=$this->db->get('agama');
        return $query;
    }
    function get_pendidikan(){
        $query=$this->db->get('pendidikan');
        return $query;
    }

    function get_id_by_ktp($ktp)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('no_ktp', $ktp);
        $query = $this->db->get();

        return $query->row();
    }

    function add_login($data){
        $insert=$this->db->insert('login',$data);
        return $insert;
    }
}