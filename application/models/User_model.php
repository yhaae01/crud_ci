<?php

class User_model extends CI_model 
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true), // true digunakan untuk menghindari karakter aneh
            "email" => $this->input->post('email', true),
            "nohp" => $this->input->post('nohp', true)
        ];

        $this->db->insert('user', $data);
    }

    public function ubahUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true), // true digunakan untuk menghindari karakter aneh
            "email" => $this->input->post('email', true),
            "nohp" => $this->input->post('nohp', true)
        ];

        $this->db->where('id', $this->input->post('id')); //id disini dari input type hidden
        $this->db->update('user', $data);
    }

    public function hapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function cariUser()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('nama', $cari);
        // untuk mencari lebih dari 1 keyword
        // $this->db->or_like('email', $cari);
        // $this->db->or_like('alamat', $cari);

        return $this->db->get('user')->result_array();
    }
}