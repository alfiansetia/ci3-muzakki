<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muzakki extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model(["Muzakki_model"]);
    }

    public function index()
    {
        $data["title"] = "Data Muzakki";
        $data["muzakki"] = $this->Muzakki_model->get();
        $this->template->load('template', 'muzakki/index', $data);
    }

    public function add()
    {
        $muzakki = $this->Muzakki_model;
        $validation = $this->form_validation;
        $validation->set_rules($muzakki->rules());
        if ($validation->run()) {
            $muzakki->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("muzakki");
        }
        $data["title"] = "Tambah Muzakki";
        $this->template->load('template', 'muzakki/add', $data);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('muzakki');
            show_404();
        } else {
            $muzakki = $this->Muzakki_model;
            $validation = $this->form_validation;
            $validation->set_rules($muzakki->rules());
            if ($validation->run()) {
                $muzakki->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("muzakki");
            } else {
                $data["title"] = "Edit Muzakki";
                $data["muzakki"] = $muzakki->edit($id);
                if (!$data["muzakki"]) {
                    show_404();
                } else {
                    $this->template->load('template', 'muzakki/edit', $data);
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Muzakki_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("muzakki");
        }
    }
}
