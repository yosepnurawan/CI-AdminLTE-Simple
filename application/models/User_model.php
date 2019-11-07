<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "tbl_user";

    public function cek_user($username, $password) 
    {
        $this->db->select('id_user, username, password, flag');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->where('flag', 1);

        $result = $this->db->get($this->_table);
        return $result->row_array();
    }
}