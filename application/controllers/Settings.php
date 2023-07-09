<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    private $id;
    private $email;

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->id = $this->session->userdata('id');
        $this->email = $this->session->userdata('email');
        $this->load->model(["Settings_model", "User_model"]);
    }

    public function profile()
    {
        $user = $this->Settings_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rulesUpdate($this->id));
        if ($validation->run()) {
            $result = $user->profile_update($this->id);
            if (!$result) {
                $this->session->set_flashdata('message', '<script> alert("Profile Gagal Diupdate"); </script>');
            }
            $post = $this->input->post();
            $this->session->set_userdata([
                'nama' => $post['nama'],
                'email' => $post['email'],
            ]);
            $this->session->set_flashdata('message', '<script> alert("Profile Berhasil Diupdate"); </script>');
            redirect("settings/profile");
        } else {
            $data["title"] = "Setting Profile";
            $data["user"] = $this->session->userdata();
            $this->template->load('template', 'settings/profile', $data);
        }
    }

    public function email_check()
    {
        $data = $this->db->get_where('user', ['email' => $this->email, "id !=" => $this->id])->row();
        if ($data) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function password()
    {
        $user = $this->Settings_model;
        $validation = $this->form_validation;
        $validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'Password harus diisi.',
            'min_length' => 'Password minimal harus terdiri dari {param} karakter.',
        ]);
        $validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]', [
            'required' => 'Konfirmasi Password harus diisi.',
            'matches' => 'Konfirmasi Password tidak sesuai dengan Password.',
        ]);

        if ($validation->run()) {
            $result = $user->password_update($this->id);
            if (!$result) {
                $this->session->set_flashdata('message', '<script> alert("Password Gagal Diupdate"); </script>');
            }
            $this->session->set_flashdata('message', '<script> alert("Password Berhasil Diupdate"); </script>');
            redirect("settings/password");
        } else {
            $data["title"] = "Setting Password";
            $this->template->load('template', 'settings/password', $data);
        }
    }
}
