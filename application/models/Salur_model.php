<?php defined('BASEPATH') or exit('No direct script access allowed');

class Salur_model extends CI_Model
{

    private $table = "salur";

    public function rules()
    {
        return [
            [
                'field' => 'mustahik',
                'label' => 'Mustahik',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tgl',
                'label' => 'Tanggal',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'total',
                'label' => 'Total',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'jenis',
                'label' => 'Jenis',
                'rules' => 'trim'
            ],
            [
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'trim'
            ],
            [
                'field' => 'validasi',
                'label' => 'Validasi',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_join()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('mustahik', 'mustahik.id_mustahik = salur.id_mustahik', 'left');
        $query = $this->db->get()->result();
        return $query;
    }

    public function edit($id)
    {
        return $this->db->get_where($this->table, ["id_salur" => $id])->row();
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'id_mustahik'       => $post['mustahik'],
            'tgl_salur'         => $post['tgl'],
            'total_salur'       => $post['total'],
            'jenis_salur'       => $post['jenis'],
            'ket_salur'         => $post['keterangan'],
            'validasi_salur'    => $post['validasi'],
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'id_mustahik'       => $post['mustahik'],
            'tgl_salur'         => $post['tgl'],
            'total_salur'       => $post['total'],
            'jenis_salur'       => $post['jenis'],
            'ket_salur'         => $post['keterangan'],
            'validasi_salur'    => $post['validasi'],
        ];
        return $this->db->update($this->table, $data, ['id_salur' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id_salur' => $id]);
    }
}
