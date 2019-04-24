<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Model
{
    public function getEventById($id)
    {
        return  $this->db->get_where('events', ['id_event' => $id])->row_array();
    }
    public function getEventNameById($id)
    {
        //akwokaokwokaowkokaowkokaowkokaowkokoakwokoakwokoakwokoakowkoa
        if ($id == 1) return 'npc';
        else if ($id == 2) return 'npc';
        else if ($id == 3) return 'nlc';
    }
}
