<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaction extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getTotalTransaction()
    {
        $this->db->from('transaction');
        return $this->db->count_all_results();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('transaction.visible', 1);
        $this->db->order_by('transaction.idTransaction', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getOrdersById($id)
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('visible', 1);
        $this->db->where('idTransaction', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function getOrdersByIdUser($id)
    {
        $this->db->select('transaction.*, product.name AS product, product.image AS image');
        $this->db->from('transaction');
        $this->db->join('detail_transaction', 'transaction.idTransaction = detail_transaction.idTransaction', 'left');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->where('transaction.visible', 1);
        $this->db->where('transaction.idUser', $id);
        $this->db->order_by('transaction.idTransaction', 'DESC');
        $this->db->group_by('transaction.idTransaction');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }

    function getOrdersByIdUserPagination($limit, $offset, $id)
    {
        $this->db->select('transaction.*, product.name AS product, product.image AS image');
        $this->db->from('transaction');
        $this->db->join('detail_transaction', 'transaction.idTransaction = detail_transaction.idTransaction', 'left');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->where('transaction.visible', 1);
        $this->db->where('transaction.idUser', $id);
        $this->db->order_by('transaction.idTransaction', 'DESC');
        $this->db->group_by('transaction.idTransaction');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function countAllDataByIdUser($id)
    {
        $this->db->select('transaction.idTransaction');
        $this->db->from('transaction');
        $this->db->join('detail_transaction', 'transaction.idTransaction = detail_transaction.idTransaction', 'left');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->where('transaction.visible', 1);
        $this->db->where('transaction.idUser', $id);
        $this->db->order_by('transaction.idTransaction', 'DESC');
        $this->db->group_by('transaction.idTransaction');
        $query = $this->db->get();
        return $query->result();
    }

    function save()
    {
        $this->db->trans_begin();

        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('status', 1);
        $this->db->order_by('idTransaction', 'DESC');
        $query = $this->db->get();
        $result = $query->row();

        if ($result) {
            $id = $result->idTransaction;
        } else {
            $id = 0;
        }

        $invoice = '#IN' . date('y') . date('m') . date('d') . str_pad($id, 3, '0', STR_PAD_LEFT);

        $data['noInvoice']          = $invoice;
        $data['paymentMethod']      = $this->input->post('paymentMethod');
        $data['totalPrice']         = $this->input->post('totalPrice');
        $data['name']               = $this->input->post('name');
        $data['gender']             = $this->input->post('gender');
        $data['email']              = $this->input->post('email');
        $data['address']            = $this->input->post('address');
        $data['urbanVillage']       = $this->input->post('urbanVillage');
        $data['district']           = $this->input->post('district');
        $data['city']               = $this->input->post('city');
        $data['province']           = $this->input->post('province');
        $data['posCode']            = $this->input->post('posCode');
        $data['phone']              = $this->input->post('phone');
        $data['idUser']             = $this->session->userdata('idUser');
        $data['note']               = $this->input->post('note');

        $this->db->insert('transaction', $data);

        $idTransaction  = $this->db->insert_id();

        $batch_array    = array();

        $listCart       = $this->session->userdata('cart');

        foreach ($listCart as $lc) {
            $sub_data["idTransaction"]    = $idTransaction;
            $sub_data["idProduct"]        = $lc->idProduct;
            $sub_data["quantity"]         = $lc->qty;
            $sub_data["subTotal"]         = $lc->qty * $lc->price;
            $batch_array[]                = $sub_data;
        }

        $this->db->insert_batch('detail_transaction', $batch_array);

        $this->session->unset_userdata('cart');

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function update($id, $type)
    {
        $this->db->trans_begin();

        if ($type) {
            $data['status']  = 2;
            $data['statusPayment']  = 1;
        } else {
            if ($this->input->post('status') == 1) {
                $data['status']  = 1;
                $data['statusPayment']  = 0;
            } else {
                $data['status']  = $this->input->post('status');
            }
        }

        $this->db->where('idTransaction', $id);
        $this->db->update('transaction', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
