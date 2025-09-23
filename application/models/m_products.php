<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Products extends CI_Model {

    public function save($data)
    {
        return $this->db->insert('tabProducts', $data);
    }
}
