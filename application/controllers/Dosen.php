<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model("Dosen_model");
    }

    public function index()
    {
        $data["title"] = "Data Dosen";
        $data["dosen"] = $this->Dosen_model->get();
        $this->load->view('header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $dosen = $this->Dosen_model;
        $validation = $this->form_validation;
        $validation->set_rules($dosen->rules());
        if ($validation->run()) {
            $dosen->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("dosen");
        }
        $data["title"] = "Tambah Dosen";
        $this->load->view('header', $data);
        $this->load->view('dosen/add', $data);
        $this->load->view('footer');
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('dosen');
            show_404();
        } else {
            $dosen = $this->Dosen_model;
            $validation = $this->form_validation;
            $validation->set_rules($dosen->rules());
            if ($validation->run()) {
                $dosen->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("dosen");
            } else {
                $data["title"] = "Edit Dosen";
                $data["dosen"] = $dosen->edit($id);
                if (!$data["dosen"]) {
                    show_404();
                } else {
                    $this->load->view('header', $data);
                    $this->load->view('dosen/edit', $data);
                    $this->load->view('footer');
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Dosen_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("dosen");
        }
    }
}
