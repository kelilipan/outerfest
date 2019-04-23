<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('emailAdmin')) {
            redirect(base_url('admin/login'));
        } else {
            $data = $this->Peserta->get_statistic();
            $data['peserta'] = $this->Peserta->fetch_approval();
            $this->load->view('admin/dashboard', $data);
        }
    }
    public function asjodajoskodaod()
    {
        $data = [
            'nama' => 'ngadimin',
            'email' => 'admin@admin.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ];
        $this->db->insert('admin', $data);
    }
    public function login()
    {
        if ($this->session->userdata('emailAdmin')) {
            redirect('admin');
        }
        $this->form_validation->set_rules(array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            )
        ));
        if (!$this->form_validation->run()) {
            $this->load->view('admin/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $admin = $this->Admins->getAdminByEmail($this->input->post('email', true));
        if (!$admin) {
            $this->session->set_flashdata('message', 'User tidak ditemukan.');
            redirect(base_url('admin/login'));
            // echo var_dump($admin);
        } else {
            if (!password_verify($this->input->post('password'), $admin['password'])) {
                $this->session->set_flashdata('message', 'Password yang anda masukan salah.');
                redirect(base_url('admin/login'));
                // echo "salah pass";
            } else {
                $data = [
                    'id_admin' => $admin['id_peserta'],
                    'emailAdmin' => $admin['email'],
                    'namaAdmin' => $admin['nama']
                ];
                $this->session->set_userdata($data);
                redirect(base_url('admin'));
            }
        }
    }
    public function pengumuman()
    {
        $data['pengumuman'] = $this->Pengumuman->fetch();
        $this->load->view('admin/pengumuman', $data);
    }
    public function peserta()
    {
        $data['peserta'] = $this->Peserta->fetch();
        $this->load->view('admin/peserta', $data);
    }
    public function transaksi()
    {
        $this->load->view('admin/transaksi');
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
