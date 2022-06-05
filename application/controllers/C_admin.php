<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_product');
        $this->load->model('M_contact');
        $this->load->model('M_transaction');
        $this->load->model('M_detail_transaction');
    }

    public function add_product()
    {
        $data["classAktif"]    = "list_products_admin";
        $data["page"]          = "add_product_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function edit_product($id)
    {
        $data["product"]       = $this->M_product->getById($id);
        $data["classAktif"]    = "list_products_admin";
        $data["page"]          = "edit_product_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function view_product($id)
    {
        $data["product"]       = $this->M_product->getById($id);
        $data["classAktif"]    = "list_products_admin";
        $data["page"]          = "view_product_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function list_products()
    {
        $data["list_product"]  = $this->M_product->getAll();
        $data["classAktif"]    = "list_products_admin";
        $data["page"]          = "list_products_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function edit_transaction($id)
    {
        $data["orders"]           = $this->M_transaction->getOrdersById($id);
        $data["detail_orders"]    = $this->M_detail_transaction->getDetailOrdersById($id);
        $data["classAktif"]       = "list_transaction_admin";
        $data["page"]             = "edit_transaction_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function view_transaction($id)
    {
        $data["orders"]           = $this->M_transaction->getOrdersById($id);
        $data["detail_orders"]    = $this->M_detail_transaction->getDetailOrdersById($id);
        $data["classAktif"]       = "list_transaction_admin";
        $data["page"]             = "view_transaction_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function list_transaction()
    {
        $data["list_transaction"]  = $this->M_transaction->getAll();
        $data["classAktif"]        = "list_transaction_admin";
        $data["page"]              = "list_transaction_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function list_feedback()
    {
        $data["list_contact"]  = $this->M_contact->getAll();
        $data["classAktif"]    = "list_feedback_admin";
        $data["page"]          = "list_contact_admin";

        $this->load->view('template_admin/index', $data);
    }

    public function save_product()
    {
        $image  = !empty($_FILES) ?  $_FILES['file']['name'] : null;

        if ($image) {
            $config['upload_path']          = './assets/upload/products/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $new_image  = $this->upload->data('file_name');
                $result     = $this->M_product->save($new_image);
                $status     = $result;

                echo json_encode(array(
                    'status' => $status,
                ));
                return;
            } else {
                echo json_encode(array(
                    'status' => 504,
                ));
                return;
            }
        }
    }

    public function update_product($id)
    {
        $product    = $this->M_product->getById($id);
        $image      = !empty($_FILES) ?  $_FILES['file']['name'] : null;

        if ($image) {
            $config['upload_path']          = './assets/upload/products/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $old_image  = $product->image;
                if ($old_image != 'images/default/male-default.png' && $old_image != 'images/default/male-default.png') {
                    unlink(FCPATH . 'assets/upload/products/' . $old_image);
                }
                $new_image  = $this->upload->data('file_name');
                $result     = $this->M_product->update($id, $new_image);
                $status     = $result;

                echo json_encode(array(
                    'status' => $status,
                ));
                return;
            } else {
                echo json_encode(array(
                    'status' => 504,
                ));
                return;
            }
        } else {
            $result     = $this->M_product->update($id, $product->image);
            $status     = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        }
    }

    public function delete_product($id)
    {
        $product    = $this->M_product->getById($id);
        $old_image  = $product->image;
        if ($old_image != 'images/default/male-default.png' && $old_image != 'images/default/male-default.png') {
            unlink(FCPATH . 'assets/upload/products/' . $old_image);
        }
        $result     = $this->M_product->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function delete_contact($id)
    {
        $result     = $this->M_contact->delete($id);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }

    public function update_transaction($id, $type = null)
    {
        $result     = $this->M_transaction->update($id, $type);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}
