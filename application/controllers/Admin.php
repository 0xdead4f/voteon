<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    // Halaman login admin
    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('admin/menu');
        }

        if ($this->session->userdata('login_user')) {
            redirect('pilih');
        }

        $this->load->view('admin/v_login');
    }

    // Login 
    public function login()
    {
        if ($this->m_admin->login()) {
            echo "<script>window.location='menu';alert('Selamat datang admin!')</script>";
        } else {
            $this->session->set_flashdata('fail', 'Login Gagal');
            redirect('admin');
        }
    }

    // Tampilan halaman menu
    public function menu()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_menu');
    }

    // Menampilkan tabulasi data warga
    public function warga()
    {
        $data['warga'] = $this->m_admin->get_warga();
        $this->load->view('admin/v_warga', $data);
    }


    //5. menampilkan halaman tabulasi surat suara
    public function tabulasi()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }

        $data['surat_suara_num_rows'] = $this->m_admin->get_surat_suara();
        $data['data_calon'] = $this->m_admin->get_data_calon();
        $this->load->view('admin/v_tabulasi', $data);
    }


    public function a()
    {

        $z = $this->input->post('limit');
        foreach ($this->m_admin->get_suara($z) as $a) {
            echo $a->id;
        }
    }

    public function b()
    {
        $z = $this->input->post('limit');
        foreach ($this->m_admin->get_suara_2($z) as $a) {
            echo $a->suara;
        }
    }



    //6. menampilkan halaman insert calon kades
    public function calon()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }

        $data['pemilu'] = $this->m_admin->getNamaPemilu();
        $this->load->view('admin/v_calon', $data);
    }

    //7.Proses insert calon kades
    public function insert_calon()
    {
        $config['upload_path'] = '././assets/foto/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '10000';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('fail', $this->upload->display_errors());
            redirect('admin/calon');
        } else {
            $foto = $this->upload->data();
            $object = array(
                'no_urut' => $this->input->post('urut'),
                'nomor' => $this->input->post('urut'),
                'nama' => $this->input->post('calon'),
                'foto' => $foto['file_name']
            );

            $status = $this->m_admin->insert_calon($object);
        }

        if ($status) {
            $this->session->set_flashdata('success', 'Setup Success');
            redirect('admin/menu');
        } else {
            $this->session->set_flashdata('fail', 'Setup Gagal');
            redirect('admin/calon');
        }
    }

    //menampilkan halaman opsi
    public function opsi()
    {

        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_opsi');
    }

    //mereset surat suara ketika surat suara redundan
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

    //membuat reset data suara untuk mereset token atau data suara
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


    //mereset status warga untuk dapat memilih
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


    //menampilkan halaman input pemilih
    public function pemilih()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_inputpemilih');
    }


    //membuat proses insert data pemilih
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

    //melakukan proses logout (menghancurkan session)
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('admin');
    }

    //melakukan proses insert nama pemilihan umum
    public function insert_pemilihan()
    {
        if ($this->m_admin->insert_pemilihan()) {
            redirect('admin/calon');
        } else {
            $this->session->set_flashdata('fail', 'Setup Gagal');
            redirect('admin/calon');
        }
    }
}
