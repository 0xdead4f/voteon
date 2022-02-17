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



    // URUT 1
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

    // URUT 2 (Menerima method post dari V_VERIF)
    public function verif()
    {

        if ($this->m_pilih->verif($this->input->post('nik'), $this->input->post('token'))) {
            redirect('pilih/calon');
        } else {
            $this->session->set_flashdata('fail', 'Gagal Verifikasi');
            redirect('pilih');
        }
    }

    // URUT 3
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

    public function logout()
    {
        // $this->session->sess_destroy();
        $array = array(
            'nik' => $nik->nik,
            'token' => $token->identitas,
            'status_suara' => $token->status,
            'status_pemilih' => $nik->status,
        );

        $this->session->unset_userdata($array);

        redirect('home/index');
    }

    public function get_id()
    {
        $id = $this->m_pilih->get_id()->id;
        $this->update_suara($id, $this->session->userdata('token'));

        echo $id;
    }

    public function update_suara($id, $ident)
    {
        $this->m_pilih->update_suara($id, $ident);
    }

    public function pilih_suara()
    {

        if ($this->m_pilih->pilih_suara() == true) {
            $this->update_data_suara();
            $this->update_data_pemilih();
            $array = array(
                'status_pemilih' => 1
            );

            $this->session->set_userdata($array);

            echo "done";
        } else {
            echo 'fail';
        }
    }

    public function update_data_suara()
    {
        $this->m_pilih->update_data_suara($this->session->userdata('token'));
    }

    public function update_data_pemilih()
    {
        $this->m_pilih->update_data_pemilih($this->session->userdata('nik'));
    }
}
