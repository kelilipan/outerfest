<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Model
{
    public $rules = array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'instansi',
            'label' => 'Instansi',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[peserta.email]'
        ),
        array(
            'field' => 'asal',
            'label' => 'Asal',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'nohp',
            'label' => 'NoHP',
            'rules' => 'required|trim'
        ),
        // array(
        //     'field' => 'idline',
        //     'label' => 'IDLine',
        //     'rules' => 'required|trim',
        // ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|matches[re-password]|min_length[6]'
        ),
        array(
            'field' => 're-password',
            'label' => 're-Password',
            'rules' => 'required|trim|matches[password]'
        ),
        array(
            'field' => 'category',
            'label' => 'Category',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'identitas',
            'label' => 'Identitas',
            'rules' => 'required|trim'
        )
    );
    public function register()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'instansi' => $this->input->post('instansi', true),
            'email' => $this->input->post('email', true),
            'asal' => $this->input->post('asal', true),
            'nohp' => $this->input->post('nohp', true),
            'idline' => $this->input->post('idline', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'id_event' => $this->input->post('category', true),
            'identitas' => $this->input->post('identitas', true),
            'status' => 1
        ];
        $this->db->insert('peserta', $data);
    }
    public function getPeserta()
    {
        return $this->db->get_where('peserta', ['email' => $this->input->post('email', true)])->row_array();
    }
    public function getPesertaByEmail($email)
    {
        // akwokaowkokaokw
        return $this->db->get_where('peserta', ['email' => $email])->row_array();
    }
}
