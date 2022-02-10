<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function login()
    {
        $data = $this->db->where('username', $this->input->post('nama'))
            ->where('pass', sha1($this->input->post('pass')))
            ->get('user');

        if ($this->db->affected_rows() > 0) {
            $row = $data->row();

            $array = array(
                'nama' => $row->username,
                'pass' => $row->pass,
                'login' => true
            );

            $this->session->set_userdata($array);

            return true;
        } else {
            return false;
        }
    }

    // mengambil Data warga
    public function get_warga()
    {
        return $this->db->get('data_pemilih')->result();
    }
}
