<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    private $table = "user";

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
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ],
            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
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
            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ],
        ];
    }

    public function countAdmin()
    {
        // $this->db->get_where($this->table, ["role" => 'admin']);
        $this->db->from($this->table);
        $this->db->where('role', 'admin');
        return $this->db->count_all_results();
        return $this->db->count_all_results();
    }

    public function countUser()
    {
        // $this->db->get_where($this->table, ["role" => 'user']);

        $this->db->from($this->table);
        $this->db->where('role', 'user');
        return $this->db->count_all_results();
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function edit($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function getByEmail($email)
    {
        return $this->db->get_where($this->table, ["email" => $email])->row();
    }

    public function emailCheck($email)
    {
        return $this->db->get_where($this->table, ['email' => $email, "id !=" => $this->uri->segment(3)])->row();
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'email'     => $post['email'],
            'role'      => $post['role'],
            'password'  => password_hash($post['password'], PASSWORD_DEFAULT),
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'email'     => $post['email'],
            'role'      => $post['role'],
        ];
        if ($post['password'] != '') {
            $this->updatePassword($id);
        }
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function updatePassword($id)
    {
        $post = $this->input->post();
        $data = [
            'password'  => password_hash($post['password'], PASSWORD_DEFAULT),
        ];
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
