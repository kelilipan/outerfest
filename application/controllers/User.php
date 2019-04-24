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
    public function upload_bukti()
    {
        $id = $this->session->userdata('id_peserta');
        $event = $this->session->userdata('id_event');
        $total = 50000 + ((int)$this->session->userdata('id_peserta') % 1000);;
        if (!$this->Peserta->upload_bukti($id, $event, $total)) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
        };
        redirect(base_url('user'));
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
        $this->form_validation->set_rules(array(
            array(
                'field' => 'password_current',
                'label' => 'Current password',
                'rules' => 'required|trim'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|matches[password_confirmation]'
            ), array(
                'field' => 'password_confirmation',
                'label' => 'Password confirmation',
                'rules' => 'required|trim|matches[password]'
            )
        ));
        $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
        $data['eventName'] = $this->Events->getEventNameById($this->session->userdata('id_event'));
        if (!$this->form_validation->run()) {
            $this->load->view('dashboard/ganti_password.php', $data);
        } else {
            if (!password_verify($this->input->post('password_current'), $data['loggedin']['password'])) {
                $this->session->set_flashdata('message', 'Password salah.');
                redirect(base_url('user/ganti_password'));
            } else {
                $this->Peserta->ganti_password($data['loggedin']['id_peserta']);
                $this->session->set_flashdata('message', 'Password Berhasil diubah');
                redirect(base_url('user/ganti_password'));
            }
        }
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
