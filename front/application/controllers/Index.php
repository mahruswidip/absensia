<?php

//if (!defined('BASEPATH'))
//    exit('No direct script access allowed');

class Index extends BaseController
{

    protected $module = "index";

    var $BASE_API = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->helper(array('url', 'file'));
        $this->BASE_API = $this->config->item('backend_url');
        $this->load->library('pagination');
    }

    public function index()
    {
        $isi['onload'] = 'onload="load_data(1)"';
        $this->data['nama_menu'] = 'Beranda';
        $this->data['jmlbarang'] = $this->M_barang->count_all();
        $this->session->unset_userdata('id_barang');
        $this->render('index', $isi);
        // if (empty($this->session->userdata('id_user'))) {
        //     // $data['tanggal_keberangkatan'] = date('Y') . '-' . date('m');
        //     $this->data['params'] = array('bulan' => date('m'), 'tahun' => date('Y'));
        //     $this->data['hari'] = json_decode(ws_get($this->BASE_API . 'program/hari'), true);
        //     $this->data['nama_menu'] = 'Beranda';
        //     $this->data['penitip'] = $this->M_barang->penitip();
        //     $this->data['barang'] = $this->M_barang->DataTableBarang();
        //     $this->session->unset_userdata('id_barang');
        //     echo '<pre>';
        //     print_r($this->data['barang']);
        //     exit();
        //     $this->render('index');
        // } else {
        //     $this->data['nama_menu'] = 'Beranda';
        //     $this->render('beranda_profil');
        // }
    }

    public function loadData()
    {
        $response['data'] = '';

        $params = $this->input->post('keyword');
        $ambil = $this->M_barang->pagenation('barang', $params);
        $sub_array = '';
        if (!empty($ambil)) {
            foreach ($ambil as $rows) {
                $sub_array .= '<div class="col-md-3">
                <div class="card mb-5" style="border-radius: 1.5rem;">
                    <div style="border-radius: 1.5rem;width: 285px;height: 187px; object-fit: scale-down;background: url('.BACKEND_FILE . "/" . $rows['foto_barang'].') no-repeat;background-size: cover;background-position: center;" class="card-img-top img-fluid" src="'.BACKEND_FILE . "/" . $rows['foto_barang'].'"></div>
                    <div class="card-body">
                        <h6 class="card-title">'.$rows['judul_barang'].'</h6>
                        <p class="card-text">'.$rows['nomor_registrasi'].'</p>                        
                        <div class="read-more"><a href="'.site_url('index/detail_barang/' . str_replace("-", "", $rows['id_barang'])).'"><i class="icofont-arrow-right"></i> Lihat Detail</a></div>
                    </div>
                </div>
            </div>';
            }
        } else {
            $sub_array .='<div class="col-md-12">
            <div class="card mb-5" style="border-radius: 1.5rem;">
                    <div class="card-body">
                        <h6 class="card-title">Data yang dicari tidak ada. silahkan gunakan keyword lainnya</h6>
                    </div>
                </div>
            </div>';
        }
        

        $response['data'] = $sub_array;

        echo json_encode($response);
    }


    public function pagedata()
    {
        $config = array();
        $config["base_url"] = base_url();
        $config["total_rows"] = $this->mdata->count_all('barang');
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config['attributes'] = array('class' => 'page-link');
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li class="page-item">';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"]  = '<li class="page-item">';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = 'Next';
        $config["next_tag_open"] = '<li class="page-item">';
        $config["next_tag_close"] = '</li>';
        $config['prev_link'] = 'Previous';
        $config["prev_tag_open"] = '<li>';
        $config["prev_tag_close"] = '</li>';
        $config["cur_tag_open"] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //$config['display_pages'] = FALSE;
        $config["last_link"] = "Last";
        $config["first_link"] = "First";
        $config['num_links'] = 2;

        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];

        $data = array();
        $ambil = $this->mdata->pagenation('barang', $config["per_page"], $start);
        foreach ($ambil as $row) {
            $sub_array = array();
            $sub_array = '
          <div class="p-2">
          <div class="card">
          <div class="card-header">' . $row->judul_barang . '</div>
          <div class="card-body">' . $row->nomor_registrasi . '</div>          
          </div>
        </div>';
            $data[] = $sub_array;
        }

        $output = array(
            'list_link' => $this->pagination->create_links(),
            'list_nama' => $data
        );

        echo json_encode($output);
    }

    public function logout()
    {
        $this->session->unset_userdata("id_user");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("id_role");
        $this->session->unset_userdata("nomor_hp");
        $this->session->unset_userdata("saldo");
        $this->session->unset_userdata("alamat");
        $this->session->unset_userdata("created_at");
        $this->session->unset_userdata("type");
        $this->session->unset_userdata('id_paket_program');
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['barang'] = $this->M_barang->get_product_keyword($keyword);
        $this->load->view('hasil_pencarian', $data);
    }

    public function detail_barang($id)
    {
        $this->data['nama_menu'] = 'Blog Barang';
        $this->data['barang'] = $this->M_barang->get($id, true);
        // echo '<pre>';
        // print_r($this->data['barang']);
        // exit();
        $this->render('detail_barang');
    }
}
