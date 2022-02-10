<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    //8
    public function opsi()
    {

        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_opsi');
    }

    //9
    public function reset_surat_suara()
    {
        $status = $this->m_admin->deleteSuratSuara();
        if ($status) {
            $this->session->set_flashdata('success', 'Berhasil mereset surat suara');
            redirect('admin/opsi');
        } else {
            $this->session->set_flashdata('fail', 'Gagal mereset surat suara');
            redirect('admin/opsi');
        }
    }

    //10
    public function reset_data_suara()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $object = array('status' => 0);
        $status = $this->db->where('status', 1)->update('data_suara', $object);
        if ($status) {
            $this->session->set_flashdata('success', 'Berhasil reset surat suara');
            redirect('admin/opsi');
        } else {
            $this->session->set_flashdata('fail', 'Gagal reset data suara');
            redirect('admin/opsi');
        }
    }

     //11
     public function reset_status_pemilih()
     {
         if (!$this->session->userdata('login')) {
             redirect('admin');
         }
 
         $object = array('status' => 0);
         $status = $this->db->where('status', 1)->update('data_pemilih', $object);
         if ($status) {
             $this->session->set_flashdata('success', 'Berhasil reset status pemilih');
             redirect('admin/opsi');
         } else {
             $this->session->set_flashdata('fail', 'Gagal reset status pemilih');
             redirect('admin/opsi');
         }
     }

     //12
    public function pemilih()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_inputpemilih');
    }

     //13
     public function insert_pemilih()
     {
         $object = array(
             'id' => $this->input->post('id'),
             'nik' => $this->input->post('nik'),
             'status' => $this->input->post('status')
         );
         $status = $this->db->insert('data_pemilih', $object);
         if ($status) {
             $this->session->set_flashdata('success', 'Berhasil input data');
             redirect('admin/pemilih');
         } else {
             $this->session->set_flashdata('fail', 'Gagal input data');
             redirect('admin/pemilih');
         }
     }

}
