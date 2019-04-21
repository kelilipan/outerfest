<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Model
{
    public function fetch()
    {
        return $this->db->get('pengumuman')->result_array();
    }
}
