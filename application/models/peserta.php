<?php
class peserta extends CI_Model {

    public function getPeserta(){
        $filter = $this->input->get('find');
        $this->db->like('id', $filter);
        return $this->db->get("peserta");
    }

    public function insertPeserta($data)
    {
        $this->db->insert('peserta', $data);
        return $this->db->insert_id();
    }
}