<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model(["Salur_model", "Mustahik_model"]);
    }

    public function index()
    {
        $data["title"] = "Data Penyaluran";
        $data["salur"] = $this->Salur_model->get_join();
        $this->template->load('template', 'salur/index', $data);
    }

    public function add()
    {
        $salur = $this->Salur_model;
        $validation = $this->form_validation;
        $validation->set_rules($salur->rules());
        if ($validation->run()) {
            $salur->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("salur");
        }
        $data["title"] = "Tambah Penyaluran";
        $data["mustahik"] = $this->Mustahik_model->get();
        $this->template->load('template', 'salur/add', $data);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('salur');
            show_404();
        } else {
            $salur = $this->Salur_model;
            $validation = $this->form_validation;
            $validation->set_rules($salur->rules());
            if ($validation->run()) {
                $salur->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("salur");
            } else {
                $data["title"] = "Edit Penyaluran";
                $data["salur"] = $salur->edit($id);
                $data["mustahik"] = $this->Mustahik_model->get();
                if (!$data["salur"]) {
                    show_404();
                } else {
                    $this->template->load('template', 'salur/edit', $data);
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Salur_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("salur");
        }
    }
}
