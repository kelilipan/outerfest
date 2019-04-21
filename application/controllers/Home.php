<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/index.php');
    }
    public function login()
    {
        $this->load->view('home/login.php');
    }
    public function register_npc()
    {
        $this->form_validation->set_rules($this->Peserta->rules);
        if (!$this->form_validation->run()) {
            $this->load->view('home/register_npc.php');
            // var_dump($this->Peserta->rules);
        } else {
            $this->Peserta->register();
            $this->session->set_flashdata('SuccessReg', 'success');
            // harusnya redirect ke dashboard
            redirect(base_url('/home/login'));
        }
    }
    public function register_nlc()
    {
        $this->form_validation->set_rules($this->Peserta->rules);
        if (!$this->form_validation->run()) {
            $this->load->view('home/register_nlc.php');
        } else {
            $this->Peserta->register();
            $this->session->set_flashdata('SuccessReg', 'success');
            // harusnya redirect ke dashboard
            redirect(base_url('/home/login'));
        }
    }
}
