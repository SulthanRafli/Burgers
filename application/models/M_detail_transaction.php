<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_detail_transaction extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getTopProductLimit($limit)
    {
        $this->db->select('product.*');
        $this->db->from('detail_transaction');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->group_by('detail_transaction.idProduct');
        $this->db->order_by('COUNT(detail_transaction.idProduct)', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function getDetailOrdersById($id)
    {
        $this->db->select('detail_transaction.*, product.name AS product, product.price AS price');
        $this->db->from('detail_transaction');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->where('detail_transaction.visible', 1);
        $this->db->where('detail_transaction.idTransaction', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function getDetailOrdersByIdUser($id)
    {
        $this->db->select('detail_transaction.*, product.name AS product, product.image AS image, product.price AS price');
        $this->db->from('detail_transaction');
        $this->db->join('transaction', 'transaction.idTransaction = detail_transaction.idTransaction', 'left');
        $this->db->join('product', 'product.idProduct = detail_transaction.idProduct', 'left');
        $this->db->where('detail_transaction.visible', 1);
        $this->db->where('transaction.idUser', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
