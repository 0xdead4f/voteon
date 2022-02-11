<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pilih');
        $this->load->model('m_admin');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('admin');
        }

        if ($this->session->userdata('login_user')) {
            redirect('pilih/calon');
        }
        $this->load->view('user/v_verif');
    }

    public function verif()
    {

        if ($this->m_pilih->verif($this->input->post('nik'), $this->input->post('token'))) {
            redirect('pilih/calon');
        } else {
            $this->session->set_flashdata('fail', 'Gagal Verifikasi');
            redirect('pilih');
        }
    }

    public function calon()
    {

        //jika bukan session user yang login maka redirect ke login
        if (!$this->session->userdata('login_user')) {
            redirect('pilih');
        }
        //jika sudah memilih maka diarahkan untuk ke home
        if ($this->session->userdata('status_pemilih') == 1) {
            $this->session->sess_destroy();
            redirect('/');
        }

        $data['calon'] = $this->m_pilih->get_calon();
        $data['jumlah'] = $this->m_admin->getIDPemilu()->jumlah;
        $this->load->view('user/v_pilih', $data);
    }

    public function update_suara($id, $ident)
    {
        $object = array('status' => 1, 'token' => $ident);

        $this->db->where('id', $id)->update('surat_suara', $object);


        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function pilih_suara()
    {
        $object = array('suara' => $this->input->post('suara'));
        $this->db->where('id', $this->input->post('ident'))->update('surat_suara', $object);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_data_suara($ident)
    {
        $object = array('status' => 1);
        $this->db->where('identitas', $ident)->update('data_suara', $object);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_data_pemilih($nik)
    {
        $object = array('status' => 1);
        $this->db->where('nik', $nik)->update('data_pemilih', $object);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
