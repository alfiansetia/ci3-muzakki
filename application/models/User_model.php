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
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
        ];
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

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'email'     => $post['email'],
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
            'password'  => password_hash($post['password'], PASSWORD_DEFAULT),
        ];
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
