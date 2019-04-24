<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengumuman extends CI_Model{
    public function tambahpengumuman()
    {
        $data = [
            'id_pengumuman' => $this->input->post('id_pengumuman', true),
            'title' => $this->input->post('title', true),
            'description' => $this->input->post('description', true),
            'id_admin' => $this->input->post('id_admin', true),
            'date_created' => $this->input->post('date_created', true),
        ];
        $this->db->insert('pengumuman', $data);
    }

    // function input_data($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }

}