<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta');
    }
    function index()
    {
        $data = array(
            'peserta' => $this->Peserta->tampil_data()
        );
        $this->load->view('admin/peserta', $data);
        
    }
    function edit()
    {
         $where = array('id_peserta' => $id);
         $data['peserta'] = $this->Peserta->edit_peserta($where, 'peserta')->result();
        $this->load->view('admin/Editpeserta', $peserta);
    }
    function addpengumuman(){
        $this->load->view('admin/addpengumuman');
    }

    function update()
    {
        $id = $this->input->post('id_peserta');
        $nama = $this->input->post('nama');
        $instansi = $this->input->post('instansi');
        $email = $this->input->post('email');
        $asal = $this->input->post('asal');
        $nohp = $this->input->post('nohp');
        $idline = $this->input->post('idline');
        $password = $this->input->post('password');
        // $identitas = $this->input->post('identitas');

        $peserta = array(
            'nama' => $nama,
            'instansi' => $peserta,
            'email' => $email,
            'asal' => $asal,
            'nohp' => $nohp,
            'idline' => $idline,
            'password' => $password
        );
        $this->Peserta->edit_peserta($id, $peserta);
        redirect('c_peserta/index');
    }

    public function Editpeserta()
    {
        //$where = array('id' =>$id)
        // $query = $this->Peserta->editpeserta('id_peserta', $peserta);
        // $data['peserta'] = $query->row_array();

        $this->load->view('admin/editpeserta', $data);
    }
}
