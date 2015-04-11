<?php
/**
 * Created by JetBrains PhpStorm.
 * User: samz
 * Date: 1/29/13
 * Time: 12:58 PM
 * To change this template use File | Settings | File Templates.
 */

class M_kartu extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function get_anggota_by_id($id)
    {
        $this->db->where('id_ang', $id);
        $query = $this->db->get('anggota');

            return $query;

    }
    function get_all()
    {
        $query = $this->db->get('anggota');

        return $query;

    }

    function get_kec(){
        $this->db->where('DS','0');
        $query = $this->db->get('maskel');

        return $query;

    }

    function count_anggota(){
        return $this->db->count_all_results('anggota');
    }

    function anggota_tampil($limit,$offset,$order = TRUE){
        if ($order == TRUE) {
            $ascdesc = 'asc';
        } else {
            $ascdesc = 'desc';
        }

        $this->db->from('anggota');
        $this->db->limit($limit,$offset);
        $this->db->order_by('id_ang',$ascdesc);
        $query = $this->db->get();
        return $query->result();
    }

    function get_anggota_id($id){
        $this->db->where('id_ang', $id);
        $query = $this->db->get('anggota');

        return $query->row();
    }
}