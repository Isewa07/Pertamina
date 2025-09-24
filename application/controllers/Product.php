<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product'); // load model once
    }

    public function save()
    {
        $data = array(
            'Name'   => $this->input->post('ProductName'),
            'Price'  => $this->input->post('ProductPrice'),
            'Stock'  => $this->input->post('ProductStock'),
            'Is_sell' => $this->input->post('ForSale') ? 1 : 0
        );

        if ($this->M_Product->save($data)) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to insert"));
        }
    }

    public function getProduct()
    {
        $data = $this->M_Product->get_all();
        echo json_encode($data);
    }

    public function getProductById($id)
    {
        $product = $this->M_Product->get_by_id($id);
        echo json_encode($product);
    }

     public function update($id)
    {
        $data = [
            'name'  => $this->input->post('ProductName'),
            'price' => $this->input->post('ProductPrice'),
            'stock' => $this->input->post('ProductStock'),
            'is_sale' => $this->input->post('ProductSale')
        ];

        if ($this->M_Product->update($id, $data)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function delete($id)
    {
        if ($this->M_Product->soft_delete($id)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

}
