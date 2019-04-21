<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['event'] = $this->Events->getEventById($this->session->userdata('id_event'));
            $data['eventName'] = $this->Events->getEventNameById($this->session->userdata('id_event'));
            $this->load->view('dashboard/index', $data);
        }
    }
    public function timeline()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['event'] = $this->Events->getEventById($this->session->userdata('id_event'));
            $data['eventName'] = $this->Events->getEventNameById($this->session->userdata('id_event'));
            $this->load->view('dashboard/timeline', $data);
        }
    }
    public function pengumuman()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['event'] = $this->Events->getEventById($this->session->userdata('id_event'));
            $data['eventName'] = $this->Events->getEventNameById($this->session->userdata('id_event'));
            $data['pengumuman'] = $this->Pengumuman->fetch();
            $this->load->view('dashboard/pengumuman', $data);
        }
    }
    public function ganti_password()
    {
        $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
        $data['eventName'] = $this->Events->getEventNameById($this->session->userdata('id_event'));
        $this->load->view('dashboard/ganti_password.php', $data);
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
