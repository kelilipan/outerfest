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
    public function getpeserta($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('peserta');
    }

    public function tampil_data()
    {
        $query = $this->db->get('peserta');
        return $query->result();
    }

    public function edit_peserta($id, $peserta)
    {
        return $this->db->get_where($peserta, $id);
        $success = $this->db->update('peserta', $peserta);
        if ($success) {
            redirect('/c_peserta/index/');
        } else {
            redirect('/c_peserta/editpeserta/');
        }
    }

    function update_data($where, $data, $peserta)
    {
        $this->db->where($where);
        $this->db->update($peserta, $data);
    }
    // public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    // }
    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->product_id = $post["id"];
    //     $this->name = $post["name"];
    //     $this->price = $post["price"];
    //     $this->description = $post["description"];
    //     $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("product_id" => $id));
    // }
}
