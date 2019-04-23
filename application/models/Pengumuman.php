<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Model
{
    public function fetch()
    {
        return $this->db->get('pengumuman')->result_array();
    }
    public function addPengumuman()
    {
        $data  = [
            'title' => $this->input->post('title', true),
            'description' => $this->input->post('deskripsi', true),
            'id_admin' => $this->session->userdata('id_admin'),
            'date_created' => date('d F Y')
        ];
        $this->db->insert('pengumuman', $data);
    }
}
