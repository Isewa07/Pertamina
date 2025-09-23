<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Products'); // load model once
    }

    public function save()
    {
        $data = array(
            'ProductName'   => $this->input->post('ProductName'),
            'ProductPrice'  => $this->input->post('ProductPrice'),
            'ProductStock'  => $this->input->post('ProductStock'),
            'ProductStatus' => $this->input->post('ForSale') ? 1 : 0
        );

        if ($this->M_Products->save($data)) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to insert"));
        }
    }
}
