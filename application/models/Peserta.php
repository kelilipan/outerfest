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
            'status' => 1
        ];
        $config['upload_path']          = './uploads/identitas';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $config['file_name']            = $this->db->query("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'iben' AND TABLE_NAME = 'peserta'")->row()->AUTO_INCREMENT;
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_identitas')) {
            // echo var_dump($error);
            $this->session->set_flashdata('message', $this->upload->display_errors());
            return false;
        } else {
            $info = $this->upload->data();
            $data['identitas'] = $info['file_name'];
            $this->db->insert('peserta', $data);
            return true;
        }
    }
    public function getPeserta()
    {
        return $this->db->get_where('peserta', ['email' => $this->input->post('email', true)])->row_array();
    }
    public function fetch_all()
    {
        return $this->db->select('*')->from('peserta')
            ->join('bukti_transfer', 'peserta.id_buktitransfer = bukti_transfer.id_buktitransfer')
            ->get()->result_array();
    }
    public function fetch()
    {
        return $this->db->get('peserta')->result_array();
    }
    public function fetch_approval()
    {
        return $this->db->where('status', '2')
            ->join('bukti_transfer', 'bukti_transfer.id_buktitransfer = peserta.id_buktitransfer', 'LEFT')
            ->get('peserta')->result_array();
    }
    public function getPesertaByEmail($email)
    {
        // akwokaowkokaokw
        return $this->db->get_where('peserta', ['email' => $email])->row_array();
    }
    public function upload_bukti($id, $event, $total)
    {

        $config['upload_path']          = './uploads/bukti_transfer';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['remove_spaces']        = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_bukti')) {
            //error
            $this->session->set_flashdata('message', $this->upload->display_errors());
            return false;
        } else {
            //ga error
            $info = $this->upload->data();
            $data1 = array(
                'url' => base_url('uploads/bukti_transfer/') . $info['file_name'],
                'id_peserta' => $id,
                'id_event' => $event,
                'total' => $total
            );
            $this->db->insert('bukti_transfer', $data1);
            $data = array(
                'status' => 2,
                'id_buktitransfer' => $this->db->insert_id()
            );
            $where = array('id_peserta' => $id);
            $this->db->where($where)->update('peserta', $data);
            return true;
        }
    }
    public function ganti_password($id)
    {
        $data = array(
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $where = array('id_peserta' => $id);
        $this->db->where($where)->update('peserta', $data);
    }
    public function get_statistic()
    {
        $data = [
            'total' => $this->db->count_all_results('peserta'),
            'terdaftar' => $this->db->where('status', '1')->count_all_results('peserta'),
            'approve' => $this->db->where('status', '2')->count_all_results('peserta'),
            'closed' => $this->db->where('status', '3')->count_all_results('peserta')
        ];
        return $data;
    }
    public function approve($id)
    {
        $data = array(
            'status' => 3
        );
        $where = array('id_peserta' => $id);
        $this->db->where($where)->update('peserta', $data);
    }
    public function delete($id)
    {
        $this->db->delete('peserta', array('id_peserta' => $id));
        $this->db->delete('bukti_transfer', array('id_peserta' => $id));
    }
    public function edit()
    {
        $where = array('id_peserta' => $this->input->post('id_peserta'));
        $data = [
            'nama' => $this->input->post('nama', true),
            'instansi' => $this->input->post('instansi', true),
            'email' => $this->input->post('email', true),
            'asal' => $this->input->post('asal', true),
            'nohp' => $this->input->post('nohp', true),
            'idline' => $this->input->post('idline', true),
            'status' => $this->input->post('status', true),
        ];
        $this->db->where($where)->update('peserta', $data);
    }
}
