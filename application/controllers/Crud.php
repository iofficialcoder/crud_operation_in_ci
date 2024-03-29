<?php

class Crud extends CI_Controller
{

    public function index($page = 0)
    {
        $this->load->library('pagination');
        $this->load->model('crud_model');

        $config['base_url'] = base_url('crud/index');
        $config['total_rows'] = $this->crud_model->countAllProducts();
        $config['per_page'] = 4; // Number of records per page

        $this->pagination->initialize($config);

        $data['product_details'] = $this->crud_model->getAllProducts($config['per_page'], $page);
        $data['pagination_links'] = $this->pagination->create_links();
        $data['page'] = $page;
        $data['total_pages'] = ceil($config['total_rows'] / $config['per_page']);

        $this->load->view('crud_view', $data);
    }



    public function addProduct()
    {
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');
        // $this->form_validation->set_rules('image_url', 'Product Image', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data_error = [
                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else {
            $result = $this->crud_model->insertProduct([
                // 'name' => 'Red',
                // 'price' => 55,
                // 'quantity' => 66

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity'),
                'image_url' => $this->input->post('image_url')
            ]);

            if ($result) {
                $this->session->set_flashdata('inserted', 'Your Data has been Succesfully Added!');
            }
        }

        redirect('crud');
    }

    public function editProduct($id)
    {
        $data['singleProduct'] = $this->crud_model->getSingleProduct($id);
        $this->load->view('edit_view', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');
        // $this->form_validation->set_rules('image_url', 'Product Image', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data_error = [
                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else {
            $result = $this->crud_model->updateProduct([
                // 'name' => 'Red',
                // 'price' => 55,
                // 'quantity' => 66

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity'),
                'image_url' => $this->input->post('image_url')
            ], $id);

            if ($result) {
                $this->session->set_flashdata('updated', 'Your Data has been Succesfully Updated!');
            }
        }

        redirect('crud');
    }

    public function deleteProduct($id)
    {
        $result = $this->crud_model->deleteItem($id);

        if ($result == true) {
            $this->session->set_flashdata('deleted', 'The Product has been Deleted!!');
        }

        redirect('crud');
    }
}
