<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homeadmin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/dashboard.php');
    }

    function view_peserta()
    {
        $this->load->model('Peserta');
        // $data['peserta'] = $this->peserta->tampil_data()->result();
        $data = array(
            'peserta' => $this->Peserta->tampil_data()
        );
        $this->load->view('admin/peserta', $data);
    }

    public function peserta()
    {
        // $data['peserta'] = $this->Pe
        $this->load->view('admin/peserta');
    }

    public function pengumuman()
    {
        $this->load->view('admin/pengumuman');
    }

    public function transaksi()
    {
        $this->load->view('admin/transaksi');
    }

    public function gantipassword()
    {
        $this->load->view('dashboard/gantipassword');
    }




    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">You have been logout </div>');
        redirect('auth');
    }
    public function addpengumuman()
    {
        $this->load->view('admin/addpengumuman');
    }
}
