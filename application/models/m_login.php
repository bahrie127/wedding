<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    function get_pegawai_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('jabatan', 'jabatan.id_jab = anggota.id_jab');
        $this->db->where('anggota.id_ang', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_profile(){
        $this->db->select('isi');
        $this->db->from('profile');
        $this->db->where('id', 1);
        $query = $this->db->get();

        return $query->row();
    }

}
?>
