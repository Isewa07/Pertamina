<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product'); // load model once
    }

    public function save()
    {
        $data = array(
            'Name'   => $this->input->post('ProductName'),
            'Price'  => $this->input->post('ProductPrice'),
            'Stock'  => $this->input->post('ProductStock'),
            'Is_sell' => $this->input->post('ForSale') ? 1 : 0
        );

        if ($this->m_product->save($data)) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to insert"));
        }
    }

    public function getProduct()
    {
        $data = $this->m_product->get_all();
        echo json_encode($data);
    }

    public function getProductById($id)
    {
        $data = $this->m_product->getProductById($id);
        echo json_encode($data);
    }

    public function update()
    {
        $id = $this->input->post('product_id');

        $data = array(
            'Name'    => $this->input->post('name'),
            'Price'   => $this->input->post('price'),
            'Stock'   => $this->input->post('stock'),
            'Is_sell' => $this->input->post('is_sell') 
        );

        $this->load->model('m_product');
        $updated = $this->m_product->update($id, $data);
        if ($updated) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to update"));
        }
    }

    public function delete($id)
    {
        $this->m_product->softDeleteProduct($id);
        echo json_encode(['status' => true]);
    }


}
