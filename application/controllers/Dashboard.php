<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model(['User_model']);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('header', $data);
        if ($this->session->userdata('role') == 1) {
            $this->load->view('dashboard/admin', $data);
        } else {
            $this->load->view('dashboard/user', $data);
        }
        $this->load->view('footer', $data);
    }
}
