<?php defined('BASEPATH') or exit('No direct script access allowed');

class Muzakki_model extends CI_Model
{

    private $table = "muzakki";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'trim'
            ],
            [
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'trim'
            ],
        ];
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function edit($id)
    {
        return $this->db->get_where($this->table, ["id_muzakki" => $id])->row();
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'nama_muzakki'   => $post['nama'],
            'alamat_muzakki' => $post['alamat'],
            'ket_muzakki'    => $post['keterangan'],
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'nama_muzakki'   => $post['nama'],
            'alamat_muzakki' => $post['alamat'],
            'ket_muzakki'    => $post['keterangan'],
        ];
        return $this->db->update($this->table, $data, ['id_muzakki' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id_muzakki' => $id]);
    }
}
