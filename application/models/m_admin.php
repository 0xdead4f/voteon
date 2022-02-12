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

    //5.1 Tabulasi surat suara untuk menghitung seluruh surat suara
    public function get_surat_suara()
    {
        return $this->db->where('status', '1')->where('suara !=', '')->get('surat_suara')->num_rows();
    }

    //5.2 Tabulasi surat suara untuk menghitung seluruh surat suara (dua)
    public function get_data_calon()
    {
        return $this->db->get('calon_kades')->result();
    }

    //5.3 Tabulasi surat suara untuk menghitung seluruh surat suara (tiga)
    public function get_suara($limit)
    {


        return $this->db->select('id')->where('status', '1')->where('suara !=', '')->limit(1, $limit)->get('surat_suara')->result();
    }

    //5.4 Tabulasi surat suara untuk menghitung seluruh surat suara (empat)
    public function get_suara_2($limit)
    {


        return $this->db->select('suara')->where('status', '1')->where('suara !=', '')->limit(1, $limit)->get('surat_suara')->result();
    }

    // form input calon
    public function getNamaPemilu()
    {
        return $this->db->select_max('nomor')->get('calon_kades')->row();
    }

     //7. Proses insert calon kades
     public function insert_calon($object)
     {
         $this->db->insert('calon_kades', $object);
 
         if ($this->db->affected_rows() > 0) {
             return true;
         } else {
             return false;
         }
     }

}
