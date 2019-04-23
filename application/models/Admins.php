<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admins extends CI_Model
{
    public function getAdminByEmail($email)
    {
        $where = array('email' => $email);
        return $this->db->get_where('admin', $where)->row_array();
    }
}
