<?php defined('BASEPATH') or exit('No direct script access allowed');

class Murid_model extends CI_Model
{

    private $table = "murid";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'nisn',
                'label' => 'NISN',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kelas',
                'label' => 'Kelas',
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

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'nisn'      => $post['nisn'],
            'kelas'     => $post['kelas'],
            'alamat'    => $post['alamat'],
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'nama'      => $post['nama'],
            'nisn'      => $post['nisn'],
            'kelas'     => $post['kelas'],
            'alamat'    => $post['alamat'],
        ];
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
