<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Murid extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model("Murid_model");
    }

    public function index()
    {
        $data["title"] = "Data Murid";
        $data["murid"] = $this->Murid_model->get();
        $this->load->view('header', $data);
        $this->load->view('murid/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $murid = $this->Murid_model;
        $validation = $this->form_validation;
        $validation->set_rules($murid->rules());
        if ($validation->run()) {
            $murid->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("murid");
        }
        $data["title"] = "Tambah Murid";
        $this->load->view('header', $data);
        $this->load->view('murid/add', $data);
        $this->load->view('footer');
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('murid');
            show_404();
        } else {
            $murid = $this->Murid_model;
            $validation = $this->form_validation;
            $validation->set_rules($murid->rules());

            if ($validation->run()) {
                $murid->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("murid");
            } else {
                $data["title"] = "Edit Murid";
                $data["murid"] = $murid->edit($id);

                if (!$data["murid"]) {
                    show_404();
                } else {
                    $this->load->view('header', $data);
                    $this->load->view('murid/edit', $data);
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
            $this->Murid_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("murid");
        }
    }
}
