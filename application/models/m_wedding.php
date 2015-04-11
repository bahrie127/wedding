<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: saifulbahri
 * Date: 6/29/14
 * Time: 1:11 PM
 * To change this template use File | Settings | File Templates.
 */

class M_wedding extends CI_Model{
    function __construct() {
        parent::__construct();
    }

    function get_tbl_wedding_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_wedding');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_id_login_by_link($link)
    {
        $this->db->select('login_id');
        $this->db->from('tbl_link');
        $this->db->where('link', $link);
        $query = $this->db->get();

        return $query;
    }

    function get_all_story_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_story');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_direction_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_direction');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_foto_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->join('tbl_foto_type', 'tbl_foto_type.id = tbl_foto.tbl_foto_type_id');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_desaign_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_desaign');
        $this->db->join('tbl_desaign_type', 'tbl_desaign_type.id = tbl_desaign.type_desaign');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_link_by_id($id)
    {
        $this->db->select('link');
        $this->db->from('tbl_link');
        $this->db->where('login_id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_cover_by_name($name)
    {
        $this->db->select('cover');
        $this->db->from('tbl_invite');
        $this->db->where('url_name', $name);
        $query = $this->db->get();

        return $query;
    }

    function get_count_cover_by_name($name)
    {
        $this->db->select('id');
        $this->db->from('tbl_invite');
        $this->db->where('url_name', $name);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_count_wedding_by_name($name)
    {
        $this->db->select('login_id');
        $this->db->from('tbl_link');
        $this->db->where('link', $name);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
?>
