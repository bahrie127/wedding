<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kartu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->auth->restrict();
        $this->load->model('m_kartu');
        $this->load->library('form_validation');
    }

    public function index()
	{
		$this->load->view('card/menu');
	}

    function cetak(){
        $this->form_validation->set_rules('no_induk', 'Nomor Induk', 'required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
        $id=$this->input->post('no_induk');
            $anggota=$this->m_kartu->get_anggota_by_id($id);
            if($anggota->num_rows()>0){
                $data['anggota']=$anggota->row();
                $this->load->view('card/hasil',$data);
            }else{
                $this->load->view('card/kosong');
            }
        }else{
            $this->load->view('header_admin');
            $this->load->view('card/no_induk');
            $this->load->view('footer');
        }
    }

    function cetak_id($id){

        $penerima=$this->m_kartu->get_anggota_by_id($id);
        if($penerima->num_rows()>0){
            $data['anggota']=$penerima->row();
            $this->load->view('card/hasil',$data);
        }else{
            $this->load->view('card/kosong');
        }
    }

    function cetakkec(){
        $id=$this->input->post('kec');
        $penerima=$this->penerima_m->get_penerima_by_kec($id);
        if($penerima->num_rows()>0){
            $data['penerima']=$penerima->result();
            $this->load->view('card/cetakkec',$data);
        }else{
            $this->load->view('card/kosong');
        }
    }

    function all(){
        $data['penerima']=$this->penerima_m->get_all()->result();
        $this->load->view('card/all',$data);
    }

    function no_induk(){
        $this->load->view('header_admin');
        $this->load->view('card/no_induk');
        $this->load->view('footer');
    }

    function kec(){
        $penerima=$this->penerima_m->get_kec();
        if($penerima->num_rows()>0){
            $data['penerima']=$penerima->result();
            $this->load->view('card/kecamatan',$data);
        }else{
            $this->load->view('card/kosong');
        }
    }

    function alldata(){
        $data['penerima']=$this->penerima_m->get_all()->result();
        $this->load->view('card/alldata',$data);
    }

    function barcode($id_code)
    {
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');

        Zend_Barcode::render('code39', 'image', array('text' => $id_code, 'barHeight' => 25), array());
    }

    function record(){
        $this->load->library('pagination');
        /* Offset */
        $uri_segment = 4;
        $limit = 10;
        $offset = $this->uri->segment($uri_segment);

        /* Generate pagination */
        $config['base_url']   	= $this->config->item('base_url')."sample/page";
        $config['total_rows'] 	= $this->m_kartu->count_anggota();
        $config['per_page']   	= $limit;
        $config['uri_segment'] 	= $uri_segment;
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div><!--pagination-->';

        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] 	= $this->pagination->create_links();
        $data['no']=($offset?$offset:0);

        $data['anggota'] 			= $this->m_kartu->anggota_tampil($limit,$offset,true);
        $this->load->view('header_admin');
        $this->load->view('card/alldata',$data);
        $this->load->view('footer');
    }

    function checklist(){
        $this->load->library('pagination');
        /* Offset */
        $uri_segment = 4;
        $limit = 10;
        $offset = $this->uri->segment($uri_segment);

        /* Generate pagination */
        $config['base_url']   	= $this->config->item('base_url')."index.php/admin/kartu/checklist";
        $config['total_rows'] 	= $this->m_kartu->count_anggota();
        $config['per_page']   	= $limit;
        $config['uri_segment'] 	= $uri_segment;
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div><!--pagination-->';

        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] 	= $this->pagination->create_links();
        $data['no']=($offset?$offset:0);

        $data['anggota'] 			= $this->m_kartu->anggota_tampil($limit,$offset,true);
        $this->load->view('header_admin');
        $this->load->view('card/alldatachecklist',$data);
        $this->load->view('footer');
    }

    function test(){
        $this->load->view('card/kelurahan');
    }

    function cetak_check(){
        $data=array();
        $status=0;
        if($this->input->post('ctk')){
            foreach ($this->input->post('ctk') as $row) {
                array_push($data,$this->m_kartu->get_anggota_id($row));
            }
            $dat['anggota']=$data;
            $this->load->view('card/all',$dat);
        }else{
            $this->load->view('card/kosong');
        }

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */