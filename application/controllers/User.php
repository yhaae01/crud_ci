<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function index()
    {
        $data['title'] = "User";
        $data['user'] = $this->User_model->getAllUser();
        if ($this->input->post('cari')) {
            $data['user'] = $this->User_model->cariUser();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahUser()
    {
        $data['title'] = "Form Tambah User";

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|trim|numeric|max_length[13]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('user/tambahUser');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->User_model->tambahUser();
            $this->session->set_flashdata('flashdata', 'Ditambahkan!');
            redirect('user');
        }
    }

    public function ubahUser($id)
    {
        $data['title'] = "Form Ubah User";
        $data['user'] = $this->User_model->getUserById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|trim|numeric|max_length[13]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('user/ubahUser', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->User_model->ubahUser();
            $this->session->set_flashdata('flashdata', 'Diubah!');
            redirect('user');
        }
    }

    public function hapusUser($id)
    {
        $this->User_model->hapusUser($id);
        $this->session->set_flashdata('flashdata', 'Dihapus!');
        redirect('user');
    }

    public function detailUser($id)
    {
        $data['title'] = "Detail User";
        $data['user'] = $this->User_model->getUserById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('user/detailUser', $data);
        $this->load->view('templates/footer');
    }
}