<?php
class M_laporan extends CI_Model{

	function index(){

    }

    function get_all(){
        $query=$this->db->get('pembukuan');
        return $query;
    }

    function get_by_date($dari,$sampai){
        $this->db->where('tanggal >=', $dari);
        $this->db->where('tanggal <=', $sampai);
        return $this->db->get('pembukuan');
    }

    function get_pagination($mulai,$banyak){
        $this->db->from('pembukuan');
        $this->db->limit($banyak,$mulai);
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_pasien(){
        return $this->db->count_all('pasien');
    }

    function get_all_pendapatan(){
        $query=$this->db->get('pembukuan');
        $alltotal=0;
        foreach($$query->result() as $row){
            $alltotal+=($row->pemasukan-$row->pengeluaran);
        }
        return $alltotal;
    }

    function get_checkup(){
       return $this->db->query('SELECT * FROM anggota');
    }

    function get_pemasukan_perday(){
        $this->db->where('tanggal=DATE(NOW())');
        $this->db->select_sum('harga');
        return $query = $this->db->get('transaksi')->result();
    }

    function get_provinsi(){
        $query=$this->db->get('provinsi');
        return $query;
    }

    function get_count_provinsi_by_id($id){
        $this->db->where('id_prov', $id);
        $query=$this->db->get('anggota');
        return $query->num_rows();
    }

    function get_count_anggota_prov_biasa($prov)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_prov', $prov);
        $this->db->where('id_jab', 1);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_prov_inti($prov)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_prov', $prov);
        $this->db->where('id_jab', 2);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_prov_teras($prov)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_prov', $prov);
        $this->db->where('id_jab', 3);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_prov_kehormatan($prov)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_prov', $prov);
        $this->db->where('id_jab', 4);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_kab_biasa($kab)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_kab', $kab);
        $this->db->where('id_jab', 1);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_kab_inti($kab)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_kab', $kab);
        $this->db->where('id_jab', 2);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_kab_teras($kab)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_kab', $kab);
        $this->db->where('id_jab', 3);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_anggota_kab_kehormatan($kab)
    {
        $this->db->select('id_ang');
        $this->db->from('anggota');
        $this->db->where('id_kab', $kab);
        $this->db->where('id_jab', 4);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_kab_by_prov($prov){
        $this->db->where('id_prov',$prov);
        $query=$this->db->get('kabupaten');
        return $query;
    }

}

