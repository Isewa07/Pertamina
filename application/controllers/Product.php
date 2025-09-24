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
            'Is_sell' => $this->input->post('ProductSale') ? 1 : 0
        );

        if ($this->m_product->save($data)) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to insert"));
        }
    }

    public function saveRedirect()
    {
        $data = array(
            'Name'   => $this->input->post('ProductName'),
            'Price'  => $this->input->post('ProductPrice'),
            'Stock'  => $this->input->post('ProductStock'),
            'Is_sell' => $this->input->post('ProductSale') ? 1 : 0
        );

        $this->m_product->save($data);
        redirect('Product/redirect_view');
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

    public function deleteRedirect($id)
    {
        $this->m_product->softDeleteProduct($id);
        echo json_encode(['status' => true]);
        redirect('Product/redirect_view');
    }

    public function redirect_view()
    {
        $data['products'] = $this->m_product->get_all(); 
        $this->load->view('v_header');
        $this->load->view('v_product_redirect', $data);
        $this->load->view('v_footer');
    }

    public function add_redirect()
    {
        $this->load->view('v_header');
        $this->load->view('v_product_add');
        $this->load->view('v_footer');
    }

    public function edit_redirect($id)
    {
        if ($this->input->post()) {
            $this->m_product->update($id, $this->input->post());
            redirect('Home/redirect_view');
        }
        $data['product'] = $this->m_product->get_by_id($id);
        $this->load->view('v_header');
        $this->load->view('v_product_edit', $data);
        $this->load->view('v_footer');
    }

    public function delete_redirect($id)
    {
        $this->m_product->delete($id);
        redirect('Home/redirect_view');
}

}
