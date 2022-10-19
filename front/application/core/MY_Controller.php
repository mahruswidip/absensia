<?php

class BaseController extends CI_Controller
{

    protected $template = "app";
    protected $module = "";
    protected $data = array();
    var $API_URL = '';
    var $API = '';
    var $API_KEY = '';

    public function __construct()
    {
        parent::__construct();
        $userId = $this->session->userdata('id_user');
        $idGroup = $this->session->userdata('id_role');
        $this->data['bulan_aktif'] = date('m');

        $uri = uri_string();
        
        if (strpos(uri_string(), 'index/index') !== false) {
            $uri = 'index/index';
        }

        if (strpos(uri_string(), 'index/loadData') !== false) {
            $uri = 'index/loadData';
        }


        // var_dump($uri); exit();
        if ($this->input->post("login-button") != null) {
            $response['status'] = false;
            $response['message'] = '';
            $this->load->library('session');
            $status = FALSE;
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data['username'] = $username;
            $data['password'] = $password;

            $result = json_decode(ws_post($this->API . 'Login/index', $data), true);

            if (!empty($result['status']) && $result['status'] == '200') {
                $session_data = array(
                    'id_user' => $result['data']['id_user'],
                    'username' => $result['data']['username'],
                    'nama' => $result['data']['data_user']['nama'],
                    'nama_ayah' => $result['data']['data_user']['nama_ayah'],
                    'id_cabang' => $result['data']['data_user']['id_cabang'],
                    'kantor_cabang' => $result['data']['data_user']['kantor_cabang'],
                    'email' => $result['data']['data_user']['email'],
                    'id_role' => $result['data']['id_group'],
                    'id_customer' => $result['data']['data_user']['id_customer'],
                    'nomor_hp' => $result['data']['data_user']['nomor_hp'],
                    'saldo' => $result['data']['data_user']['saldo'],
                    'alamat' => $result['data']['data_user']['alamat'],
                    'type' => $result['data']['data_user']['type'],
                    'nik' => $result['data']['data_user']['nik'],
                    'tempat_lahir' => $result['data']['data_user']['tempat_lahir'],
                    'tanggal_lahir' => $result['data']['data_user']['tanggal_lahir'],
                    'jenis_kelamin' => $result['data']['data_user']['jenis_kelamin'],
                    'status' => $result['data']['data_user']['status'],
                    'pendidikan' => $result['data']['data_user']['pendidikan'],
                    'pekerjaan' => $result['data']['data_user']['pekerjaan'],
                    'penghasilan' => $result['data']['data_user']['penghasilan'],
                    'id_provinsi' => $result['data']['data_user']['id_provinsi'],
                    'id_kabupaten' => $result['data']['data_user']['id_kabupaten'],
                    'id_kecamatan' => $result['data']['data_user']['id_kecamatan'],
                    'nama_propinsi' => $result['data']['data_user']['nama_propinsi'],
                    'nama_kab_kota' => $result['data']['data_user']['nama_kab_kota'],
                    'nama_kecamatan' => $result['data']['data_user']['nama_kecamatan'],
                    'url_ktp' => $result['data']['data_user']['url_ktp'],
                    'url_foto' => $result['data']['data_user']['url_foto'],
                    'is_tab_umrah' => $result['data']['data_user']['is_tab_umrah'],
                    'is_umrah' => $result['data']['data_user']['is_umrah'],
                    'token' => $result['data']['token']['token']
                );
                $status = TRUE;
                $this->session->set_userdata($session_data);
                $this->setUserData();
                if ($this->session->has_userdata('is_order_paket')) {
                    redirect(site_url('pesanansaya'));
                } else if ($this->session->has_userdata('tour_is_order')) {
                    redirect(site_url('pesanan_tour/index/verifikasi'));
                } else if ($this->session->has_userdata('hj_paket')) {
                    redirect(site_url('haji/pesanansaya'));
                } else {
                    redirect(site_url('BerandaProfil'));
                }
            } else {
                $status = FALSE;
                $response['status'] = false;
                $response['message'] = $result['message'];
                $this->session->set_flashdata('login_msg', $result['message']);
                redirect(site_url('login'));
            }
        } else if (!$userId && uri_string() == "") { // Accessing index page and there is no user session (login form state)
            //     $this->template = "app";
            //   if (!empty($this->session->userdata("id_user"))) {
            //      $this->template = "app_user";
            // }

            if ($this->input->get("access_without_login") == "true") {
                $this->data["errorMessage"] = "Session anda telah berakhir, silahkan login kembali untuk masuk ke dashboard.";
            } else if ($this->input->get("logout") == "true") {
                $this->data["successMessage"] = "Anda telah keluar.";
            } else if ($this->input->get("forgot_password") == "true") {
                $this->data["successMessage"] = "Password anda berhasil diperbarui. Silahkan login dengan password baru.";
            }
            $this->render("index");
        } else if ((!$userId && !in_array($uri, array("index/artikel", "index/beranda", "penitip/DataTablePenitip", "index/loadData", "penitip/index", "riwayat/DataTableRiwayat", "riwayat/index", "pengambilan/DataTablePengambilan", "pengambilan/index", "index/hasil_pencarian", "verifikasi_hp", "lupa_password", "login", "registrasi_akun", "pembayaran/index", "detail_new", "umroh_gratis", "kebijakanPrivasi", "syaratketentuan", "allProgram", "tabungan", "galeri", "tabungan/talangan_haji", "tabungan/talangan_umroh", "forgot_password", "forgot_password_reset", "aktifkan_akun", "logout", "about", "domestic", "international", "services", "haji", "umroh", "contact", "detail_paket", "ambil_paket", "cari", "index/getProgramUmroh", "domestic/getTourDomestik", "detail", "international/getInternational", "pembayaran", "index/cari", "referal", "pesanansaya/prosesPesanan", "domestic/buatPesanan", "pesanan_tour/index/index", 'index/kirimPesan')))) { // Accessing user page and there is no user session
            redirect("?access_without_login=true");
        } else if ($userId != null  && $idGroup != null) { // Accessing user page and there is user session
            $this->setUserData();
        }

        if (is_array($this->input->get())) {
            foreach ($this->input->get() as $key => $value) {
                $this->data[$key] = $value;
            }
        }

        if (is_array($this->input->post())) {
            foreach ($this->input->post() as $key => $value) {
                if ($key == "description" || $key == "email" || $key == "is_active" || $key == "is_soft_delete" || $key == "username" || $key == "real_name") {
                    $this->data[$key . "Input"] = $value;
                } else {
                    $this->data[$key] = $value;
                }
            }
        }
    }

    public function setUserData()
    {
        $this->data["id_user"] = $this->session->userdata("id_user");
        $this->data["username"] = $this->session->userdata("username");
        $this->data["email"] = $this->session->userdata("email");
        $this->data["id_role"] = $this->session->userdata("id_role");
        $this->data["nomor_hp"] = $this->session->userdata("nomor_hp");
        $this->data["saldo"] = $this->session->userdata("saldo");
        $this->data["alamat"] = $this->session->userdata("alamat");
        $this->data["created_at"] = $this->session->userdata("created_at");
        $this->data["type"] = $this->session->userdata("type");
        $this->data["id_customer"] = $this->session->userdata("id_customer");
        $this->data["nik"] = $this->session->userdata("nik");
        $this->data["tempat_lahir"] = $this->session->userdata("tempat_lahir");
        $this->data["tanggal_lahir"] = $this->session->userdata("tanggal_lahir");
        $this->data["jenis_kelamin"] = $this->session->userdata("jenis_kelamin");
        $this->data["status"] = $this->session->userdata("status");
        $this->data["pendidikan"] = $this->session->userdata("pendidikan");
        $this->data["pekerjaan"] = $this->session->userdata("pekerjaan");
        $this->data["penghasilan"] = $this->session->userdata("penghasilan");
        $this->data["id_provinsi"] = $this->session->userdata("id_provinsi");
        $this->data["id_kabupaten"] = $this->session->userdata("id_kabupaten");
        $this->data["nama_propinsi"] = $this->session->userdata("nama_propinsi");
        $this->data["nama_kab_kota"] = $this->session->userdata("nama_kab_kota");
        $this->data["url_ktp"] = $this->session->userdata("url_ktp");
        $this->data["url_foto"] = $this->session->userdata("url_foto");
        $this->data["is_tab_umrah"] = $this->session->userdata("is_tab_umrah");
        $this->data["is_umrah"] = $this->session->userdata("is_umrah");
    }

    protected function unSetUserData()
    {
        $this->session->unset_userdata('id_paket_program');
        $this->session->unset_userdata("id_user");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("id_role");
        $this->session->unset_userdata("nomor_hp");
        $this->session->unset_userdata("saldo");
        $this->session->unset_userdata("alamat");
        $this->session->unset_userdata("created_at");
        $this->session->unset_userdata("type");
        $this->session->unset_userdata("id_customer");
        $this->session->unset_userdata("nik");
        $this->session->unset_userdata("tempat_lahir");
        $this->session->unset_userdata("tanggal_lahir");
        $this->session->unset_userdata("jenis_kelamin");
        $this->session->unset_userdata("status");
        $this->session->unset_userdata("pendidikan");
        $this->session->unset_userdata("pekerjaan");
        $this->session->unset_userdata("penghasilan");
        $this->session->unset_userdata("id_provinsi");
        $this->session->unset_userdata("id_kabupaten");
        $this->session->unset_userdata("nama_propinsi");
        $this->session->unset_userdata("nama_propinsi");
        $this->session->unset_userdata("nama_kab_kota");
        $this->session->unset_userdata("url_ktp");
        $this->session->unset_userdata("url_foto");
        $this->session->unset_userdata("is_tab_umrah");
        $this->session->unset_userdata("is_umrah");
        $this->session->sess_destroy();
    }

    protected function render($filename = null)
    {
        $this->setUserData();
        // $this->getPages();
        $this->template = "app";
        date_default_timezone_set('Asia/Jakarta');
        if (!empty($this->data["id_user"])) {
            $this->template = "app_user";
        }

        $this->data['module'] = $this->module;
        $template = $this->load->view("template/" . $this->template, $this->data, true);
        $content = $this->load->view(($this->module != "" ? $this->module . "/" : "") . $filename, $this->data, true);
        exit(str_replace("{CONTENT}", $content, $template));
    }
}
