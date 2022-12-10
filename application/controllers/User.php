<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model("User_model");
    }

    public function index()
    {
        $data["title"] = "Data User";
        $data["user"] = $this->User_model->get();
        $this->template->load('template', 'user/index', $data);
    }

    public function add()
    {
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if ($validation->run()) {
            $user->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("user");
        }
        $data["title"] = "Tambah User";
        $this->template->load('template', 'user/add', $data);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('user');
            show_404();
        } else {
            $user = $this->User_model;
            $validation = $this->form_validation;
            $validation->set_rules($user->rulesUpdate($id));
            if ($validation->run()) {
                $user->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("user");
            } else {
                $data["title"] = "Edit User";
                $data["user"] = $user->edit($id);
                if (!$data["user"]) {
                    show_404();
                } else {
                    $this->template->load('template', 'user/edit', $data);
                }
            }
        }
    }

    public function email_check($email = null)
    {
        $data = $this->User_model->emailCheck($email);
        if ($data) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->User_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("user");
        }
    }
}
