<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

    public function save($data)
    {
        return $this->db->insert('tabProducts', $data);
    }

    public function get_all()
    {
        $this->db->where('dtDeletedAt IS NULL', null, false); 
        return $this->db->get('tabProducts')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('tabProducts', ['ID' => $id, 'dtDeletedAt IS NULL' => null])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('tabProducts', $data);
    }

    public function soft_delete($id)
    {
        $this->db->where('ID', $id);
        return $this->db->update('tabProducts', ['dtDeletedAt' => date('Y-m-d H:i:s')]);
    }
}
