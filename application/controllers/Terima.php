<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terima extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model(["Terima_model", "Muzakki_model"]);
    }

    public function index()
    {
        $data["title"] = "Data Penerimaan";
        $data["terima"] = $this->Terima_model->get_join();
        
        $this->template->load('template', 'terima/index', $data);
    }

    public function add()
    {
        $terima = $this->Terima_model;
        $validation = $this->form_validation;
        $validation->set_rules($terima->rules());
        if ($validation->run()) {
            $terima->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("terima");
        }
        $data["title"] = "Tambah Penerimaan";
        $data["muzakki"] = $this->Muzakki_model->get();
        
        $this->template->load('template', 'terima/add', $data);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('terima');
            show_404();
        } else {
            $terima = $this->Terima_model;
            $validation = $this->form_validation;
            $validation->set_rules($terima->rules());
            if ($validation->run()) {
                $terima->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("terima");
            } else {
                $data["title"] = "Edit Penerimaan";
                $data["terima"] = $terima->edit($id);
                $data["muzakki"] = $this->Muzakki_model->get();
                
                if (!$data["terima"]) {
                    show_404();
                } else {
                    $this->template->load('template', 'terima/edit', $data);
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Terima_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("terima");
        }
    }
}
