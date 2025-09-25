<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_product extends CI_Model {

    public function save($data)
    {
        return $this->db->insert('tabProducts', $data);
    }

    public function get_all()
    {
        $this->db->where('dtDeletedAt IS NULL', null, false); 
        return $this->db->get('tabProducts')->result();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('tabProducts', ['ID' => $id, 'dtDeletedAt' => null])->row_array();
    }

    public function update($id, $data)
    {
        //$data['dtUpdatedAt'] = date('Y-m-d H:i:s');
        $this->db->set('dtUpdatedAt', 'NOW()', FALSE);
        $this->db->where('ID', $id);
        return $this->db->update('tabProducts', $data);
    }

    public function softDeleteProduct($id)
    {
        $this->db->set('dtDeletedAt', 'NOW()', FALSE);
        $this->db->where('ID', $id);
        return $this->db->update('tabProducts');
        //return $this->db->update('tabProducts', ['dtDeletedAt' => date('Y-m-d H:i:s')]);
    }

    

}
