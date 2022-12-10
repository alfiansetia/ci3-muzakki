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
        $this->load->model(['User_model', 'Muzakki_model', 'Mustahik_model', 'User_model']);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['muzakki'] = $this->Muzakki_model->countAll();
        $data['mustahik'] = $this->Mustahik_model->countAll();
        $data['user_admin'] = $this->User_model->countAdmin();
        $data['user_user'] = $this->User_model->countUser();
        // if ($this->session->userdata('role') == 'admin') {
        $this->template->load('template', 'dashboard/admin', $data);
        // } else {
        // $this->template->load('template','dashboard/user', $data);
        // }
    }
}
