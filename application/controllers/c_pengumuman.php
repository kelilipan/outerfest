<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman');
    }
    function index()
    {
        $this->load->view('admin/pengumuman');
    }
    function addpengumuman()
    {
          $this->load->view('admin/addpengumuman');
        //$this->pengumuman->tambahpengumuman();
    }
    public function proses_addpengumuman()
	{
		$id_pengumuman= $this->input->post('id_pengumuman');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $id_admin = $this->input->post('id_admin');
        $date_created = $this->input->post('date_created');

        $data = array(
            'id_pengumuman'     => $id_pengumuman,
            'title' => $title,
            'description' => $description,
            'id_admin' => $id_admin,
            'date_created' => $date_created
        );
		$this->pengumuman->tambahpengumuman($data,'pengumuman');
		redirect('c_pengumuman/index');
	}
}
