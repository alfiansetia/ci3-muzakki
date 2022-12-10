<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mustahik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model(["Mustahik_model"]);
    }

    public function index()
    {
        $data["title"] = "Data Mustahik";
        $data["mustahik"] = $this->Mustahik_model->get();
        $this->template->load('template', 'mustahik/index', $data);
    }

    public function add()
    {
        $mustahik = $this->Mustahik_model;
        $validation = $this->form_validation;
        $validation->set_rules($mustahik->rules());
        if ($validation->run()) {
            $mustahik->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("mustahik");
        }
        $data["title"] = "Tambah Mustahik";
        $this->template->load('template', 'mustahik/add', $data);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('mustahik');
            show_404();
        } else {
            $mustahik = $this->Mustahik_model;
            $validation = $this->form_validation;
            $validation->set_rules($mustahik->rules());
            if ($validation->run()) {
                $mustahik->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("mustahik");
            } else {
                $data["title"] = "Edit Mustahik";
                $data["mustahik"] = $mustahik->edit($id);
                if (!$data["mustahik"]) {
                    show_404();
                } else {
                    $this->template->load('template', 'mustahik/edit', $data);
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Mustahik_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("mustahik");
        }
    }
}
