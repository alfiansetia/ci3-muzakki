<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mustahik_model extends CI_Model
{

    private $table = "mustahik";

    public function rules()
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

    public function countAll(){
        return $this->db->count_all($this->table);
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function edit($id)
    {
        return $this->db->get_where($this->table, ["id_mustahik" => $id])->row();
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'nama_mustahik'   => $post['nama'],
            'alamat_mustahik' => $post['alamat'],
            'ket_mustahik'    => $post['keterangan'],
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'nama_mustahik'   => $post['nama'],
            'alamat_mustahik' => $post['alamat'],
            'ket_mustahik'    => $post['keterangan'],
        ];
        return $this->db->update($this->table, $data, ['id_mustahik' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id_mustahik' => $id]);
    }
}
