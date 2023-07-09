<?php defined('BASEPATH') or exit('No direct script access allowed');

class Settings_model extends CI_Model
{


    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '%s  Tidak boleh kosong, Silahkan isi.!'
                )
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[user.email]',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                    'valid_email' => '%s tidak valid, Masukkan email yang valid.!',
                    'is_unique'   => '%s sudah dipakai, Masukkan email yang lain.!',
                )
            ],
        ];
    }

    public function rulesUpdate($id)
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|callback_email_check',
                'errors' => array(
                    'required'     => '%s Tidak boleh kosong, Silahkan isi.!',
                    'valid_email'  => '%s tidak valid, Masukkan email yang valid.!',
                    'email_check'  => '%s sudah dipakai, Masukkan email yang lain.!',
                )
            ],
        ];
    }

    public function password_rules()
    {
        return [
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ]
        ];
    }

    public function profile_update($id)
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'email'     => $post['email'],
        ];
        return $this->db->update('user', $data, ['id' => $id]);
    }

    public function password_update($id)
    {
        $post = $this->input->post();
        $data = [
            'password'  => password_hash($post['password'], PASSWORD_DEFAULT),
        ];
        return $this->db->update('user', $data, ['id' => $id]);
    }
}
