<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['User_model']);
    }

    public function index()
    {
        // phpinfo();
        // echo(password_hash('12345', PASSWORD_DEFAULT));
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_message('required', '%s Tidak boleh kosong, Silahkan isi.');
        $this->form_validation->set_message('valid_email', '%s Tidak benar, Silahkan Perbaiki.');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $post = $this->input->post(null, TRUE);
        $email = $post['email'];
        $password = $post['password'];
        $user = $this->User_model->getByEmail($email);
        if ($user) {
            if (password_verify($password, $user->password)) {
                $data = [
                    'login' => true,
                    'id'    => $user->id,
                    'email' => $user->email,
                    'role'  => $user->role,
                ];
                $this->session->set_userdata($data);
                if ($user->role == 'admin') {
                    $this->session->set_flashdata('message', '<script>alert("Selamat datang kembali Administrator ' . $user->nama . ' ") </script>');
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', '<script>alert("Selamat datang kembali ' . $user->nama . ' ") </script>');
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<script>alert("Password Salah !") </script>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<script>alert("Alamat email belum terdaftar !") </script>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('success', '<script>alert("Logout Berhasil !") </script>');
        redirect('login');
    }
}
