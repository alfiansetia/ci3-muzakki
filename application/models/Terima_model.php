<?php defined('BASEPATH') or exit('No direct script access allowed');

class Terima_model extends CI_Model
{

    private $table = "terima";

    public function rules()
    {
        return [
            [
                'field' => 'muzakki',
                'label' => 'Muzakki',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ],
            [
                'field' => 'tgl',
                'label' => 'Tanggal',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
            ],
            [
                'field' => 'total',
                'label' => 'Total',
                'rules' => 'trim|required',
                'errors' => array(
                    'required'    => '%s Tidak boleh kosong, Silahkan isi.!',
                )
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
        ];
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_join(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('muzakki', 'muzakki.id_muzakki = terima.id_muzakki', 'left');
        $query = $this->db->get()->result();
        return $query;
    }

    public function edit($id)
    {
        return $this->db->get_where($this->table, ["id_terima" => $id])->row();
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'id_muzakki'    => $post['muzakki'],
            'tgl_terima'    => $post['tgl'],
            'total_terima'  => $post['total'],
            'jenis_terima'  => $post['jenis'],
            'ket_terima'    => $post['keterangan'],
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'id_muzakki'    => $post['muzakki'],
            'tgl_terima'    => $post['tgl'],
            'total_terima'  => $post['total'],
            'jenis_terima'  => $post['jenis'],
            'ket_terima'    => $post['keterangan'],
        ];
        return $this->db->update($this->table, $data, ['id_terima' => $id]);
    }

    public function destroy($id)
    {
        return $this->db->delete($this->table, ['id_terima' => $id]);
    }
}
