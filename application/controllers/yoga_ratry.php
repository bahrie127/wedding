<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yoga_ratry extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct() {
        parent::__construct();
        $this->load->model('m_wedding');
    }

    public function index()
    {
        $login_id=1;
        $data['wedding']=$this->m_wedding->get_tbl_wedding_by_id($login_id)->row();
        $data['stories']=$this->m_wedding->get_all_story_by_id($login_id)->result();
        $data['direction']=$this->m_wedding->get_direction_by_id($login_id)->row();
        $data['fotos']=$this->m_wedding->get_foto_by_id($login_id)->result();
        $data['desaign']=$this->m_wedding->get_desaign_by_id($login_id)->row();
        $this->load->view('wd_view/wd_template_yoga',$data);
    }

    public function wedding(){
        $id=$this->uri->segment(3);

        if($id==null || $id==""){
            $this->load->view('wd_view/book_not_found');
        }else{
            $count=$this->m_wedding->get_count_wedding_by_name($id);
            if($count>0){
                $login_id=$this->m_wedding->get_id_login_by_link($id)->row()->login_id;
                $data['wedding']=$this->m_wedding->get_tbl_wedding_by_id($login_id)->row();
                $data['stories']=$this->m_wedding->get_all_story_by_id($login_id)->result();
                $data['direction']=$this->m_wedding->get_direction_by_id($login_id)->row();
                $data['fotos']=$this->m_wedding->get_foto_by_id($login_id)->result();
                $data['desaign']=$this->m_wedding->get_desaign_by_id($login_id)->row();
                $this->load->view('wd_view/wd_template_view',$data);
            }else{
                $this->load->view('wd_view/book_not_found');
            }

        }

    }

    public function invitation(){

        $this->load->library('user_agent');

        if ($this->agent->is_browser())
        {
            $name=$this->uri->segment(3);

            if($name==null || $name==""){

            }else{
                $count=$this->m_wedding->get_count_cover_by_name($name);
                if($count>0){
                    $data['name']=$name;
                    $this->load->view('wd_view/wd_template_invite',$data);
                }else{
                    $this->load->view('wd_view/book_not_found');
                }

            }
        }
        elseif ($this->agent->is_robot())
        {
            $id="laily-bahri";

            if($id==null || $id==""){
                $this->load->view('wd_view/book_not_found');
            }else{
                $count=$this->m_wedding->get_count_wedding_by_name($id);
                if($count>0){
                    $login_id=$this->m_wedding->get_id_login_by_link($id)->row()->login_id;
                    $data['wedding']=$this->m_wedding->get_tbl_wedding_by_id($login_id)->row();
                    $data['stories']=$this->m_wedding->get_all_story_by_id($login_id)->result();
                    $data['direction']=$this->m_wedding->get_direction_by_id($login_id)->row();
                    $data['fotos']=$this->m_wedding->get_foto_by_id($login_id)->result();
                    $data['desaign']=$this->m_wedding->get_desaign_by_id($login_id)->row();
                    $this->load->view('wd_view/wd_template_view',$data);
                }else{
                    $this->load->view('wd_view/book_not_found');
                }

            }
        }
        elseif ($this->agent->is_mobile())
        {
            $id="laily-bahri";

            if($id==null || $id==""){
                $this->load->view('wd_view/book_not_found');
            }else{
                $count=$this->m_wedding->get_count_wedding_by_name($id);
                if($count>0){
                    $login_id=$this->m_wedding->get_id_login_by_link($id)->row()->login_id;
                    $data['wedding']=$this->m_wedding->get_tbl_wedding_by_id($login_id)->row();
                    $data['stories']=$this->m_wedding->get_all_story_by_id($login_id)->result();
                    $data['direction']=$this->m_wedding->get_direction_by_id($login_id)->row();
                    $data['fotos']=$this->m_wedding->get_foto_by_id($login_id)->result();
                    $data['desaign']=$this->m_wedding->get_desaign_by_id($login_id)->row();
                    $this->load->view('wd_view/wd_template_view',$data);
                }else{
                    $this->load->view('wd_view/book_not_found');
                }

            }
        }

    }

    public function get_view_invite($name){
        $data['undangan']=$this->m_wedding->get_cover_by_name($name)->row();
        $this->load->view('wd_view/book_invite',$data);
    }

    public function not_found(){
        $this->load->view('wd_view/book_not_found');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */