<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('visible', 1);
        $this->db->order_by('idProduct', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('visible', 1);
        $this->db->where('idProduct', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function getAllLimit($limit)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('visible', 1);
        $this->db->order_by('idProduct', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function getAllPagination($limit, $offset, $keyword = null)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('visible', 1);
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('price', $keyword);
        }
        $this->db->order_by('idProduct', 'DESC');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function countAllData($keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('price', $keyword);
        }
        $this->db->from('product');
        $this->db->where('visible', 1);
        return $this->db->count_all_results();
    }

    function getDetailProduct($id)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('visible', 1);
        $this->db->where('idProduct', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function save($image)
    {
        $this->db->trans_begin();

        $data['name']          = $this->input->post('nama');
        $data['price']         = $this->input->post('harga');
        $data['description']   = $this->input->post('deskripsi');
        $data['image']         = $image;

        $this->db->insert('product', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function update($id, $image)
    {
        $this->db->trans_begin();

        $data['name']          = $this->input->post('nama');
        $data['price']         = $this->input->post('harga');
        $data['description']   = $this->input->post('deskripsi');
        $data['image']         = $image;

        $this->db->where('idProduct', $id);
        $this->db->update('product', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    function delete($id)
    {
        $this->db->trans_begin();

        $data['visible']  = 0;

        $this->db->where('idProduct', $id);
        $this->db->update('product', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
