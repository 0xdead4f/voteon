<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
     //9
     public function deleteSuratSuara()
     {
         return $this->db->where('suara', '')->where('status', 1)->delete('surat_suara');
     }
 
}
