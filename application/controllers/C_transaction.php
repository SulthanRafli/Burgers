<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaction extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_transaction');
        $this->load->model('M_detail_transaction');
    }

    public function save()
    {
        if ($this->session->has_userdata('cart')) {
            $result     = $this->M_transaction->save();
            $status     = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        } else {
            echo json_encode(array(
                'status' => 500,
            ));
        }
    }

    public function print_invoice($id)
    {
        $data["orders"]           = $this->M_transaction->getOrdersById($id);
        $data["detail_orders"]    = $this->M_detail_transaction->getDetailOrdersById($id);

        $this->load->view('print_invoice', $data);
    }
}
