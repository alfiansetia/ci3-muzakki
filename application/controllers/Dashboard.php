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
        $data['user'] = $this->User_model->edit($this->session->userdata('id'));
        if ($this->session->userdata('role') == 'admin') {
            $this->template->load('template','dashboard/admin', $data);
        } else {
            $this->template->load('template','dashboard/user', $data);
        }
    }
}
