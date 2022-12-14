<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Siswa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    } 

    /*
     * Listing of petani
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('petani/index?');
        $config['total_rows'] = $this->Siswa_model->get_all_petani_count();
        $this->pagination->initialize($config);

        $data['petani'] = $this->Siswa_model->get_all_petani($params);
        
        $data['_view'] = 'siswa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new petani
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nama_petani' => $this->input->post('nama_petani'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nik' => $this->input->post('nik'),
				'nomor_hp' => $this->input->post('nomor_hp'),
				'alamat' => $this->input->post('alamat'),
            );
            
            $petani_id = $this->Siswa_model->add_petani($params);
            redirect('petani/index');
        }
        else
        {            
            $data['_view'] = 'petani/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a petani
     */
    function edit($id_petani)
    {   
        // check if the petani exists before trying to edit it
        $data['petani'] = $this->Siswa_model->get_petani($id_petani);
        
        if(isset($data['petani']['id_petani']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'nama_petani' => $this->input->post('nama_petani'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'nik' => $this->input->post('nik'),
					'nomor_hp' => $this->input->post('nomor_hp'),
					'alamat' => $this->input->post('alamat'),
                );

                $this->Siswa_model->update_petani($id_petani,$params);            
                redirect('petani/index');
            }
            else
            {
                $data['_view'] = 'petani/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The petani you are trying to edit does not exist.');
    } 

    /*
     * Deleting petani
     */
    function remove($id_petani)
    {
        $petani = $this->Siswa_model->get_petani($id_petani);

        // check if the petani exists before trying to delete it
        if(isset($petani['id_petani']))
        {
            $this->Siswa_model->delete_petani($id_petani);
            redirect('petani/index');
        }
        else
            show_error('The petani you are trying to delete does not exist.');
    }
    
}
