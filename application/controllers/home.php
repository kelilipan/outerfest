<?php
defined('BASEPATH') or exit('No direct script access allowed');




class home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('peserta');
    }

    public function index()
    {
        $this->load->model('peserta');

        $this->load->view('home/index');
      //  $this->load->view('home/register-nlc');
    }

    public function login()
    {
        $this->load->view('home/login');
    }

    // public function uploadBukti()
    // {
    //     $config['upload_path']          = './uploads/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload',$config);

    //     $id = $this->buktitransfer->insertbuktitransfer($data);

    //     if($id){
    //         $this->session->set_flashdata("message", "Bukti berhasil disimpan")
    //         redirect('/');
    //     }
    //     else{
    //         $this->session->set_flashdata("message", "Bukti  gagal disimpan");
    //         redirect('/');
    //     }
    //     $this->load->view('dashboard.1')
    // }

    public function registerNLC()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
        
        $this->load->view('home/register-nlc');
       
    }else {
        echo 'data berhasil ditambahkan';
    }
        // $this->load->model('peserta');
        // $this->load->library('form_validation');
        // $this->load->view('home/register-nlc');
        // $this->form_validation->set_rules('name', 'Name', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        // if ($this->form_validation->run() == false) {
        //     $this->session->set_flashdata("message", "Data  gagal disimpan");
        //     redirect('/');
        // } else {
        //     echo 'data berhasil ditambahkan';
            // $data['nama'] = $this->input->get('nama');
            // $data['instansi'] = $this->input->get('instansi');
            // $data['email'] = $this->input->get('email');
            // $data['asal'] = $this->input->get('asal');
            // $data['nohp'] = $this->input->get('nohp');
            // $data['idline'] = $this->input->get('idline');
            // $data['password'] = $this->input->get('password');
            // $data['kartu'] = $this->input->get('filekartu');
            // $data['id_buktitransfer'] = $this->input->get('id_buktitransfer');
            // //  $data['nama'] = $this->input-?get('status');

            // $config['upload_path']          = './uploads/';
            // $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            // $this->load->library('upload', $config);

            // $id = $this->buktitransfer->insertbuktitransfer($data);

            // if ($id) {
            //     $this->session->set_flashdata("message", "Data berhasil disimpan");
            //     redirect('/');
            // } else {
            //     $this->session->set_flashdata("message", "Data  gagal disimpan");
            //     redirect('/');
            // }

            // $this->db->insert('peserta', $data);
        //};
    }

    public function registerNPC()
    {
        if ($this->input->get()) {
            $data['nama'] = $this->input->get('nama');
            $data['instansi'] = $this->input->get('instansi');
            $data['email'] = $this->input->get('email');
            $data['asal'] = $this->input->get('asal');
            $data['nohp'] = $this->input->get('nohp');
            $data['idline'] = $this->input->get('idline');
            $data['password'] = $this->input->get('password');
            $data['kartu'] = $this->input->get('kartu');
            $data['id_buktitransfer'] = $this->input->get('id_buktitransfer');
        }
        $this->load->view('home/register-npc');
    }
}
