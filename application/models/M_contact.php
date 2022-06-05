<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_contact extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getTotalContact()
    {
        $this->db->from('contact');
        return $this->db->count_all_results();
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('contact.visible', 1);
        $this->db->order_by('contact.idContact', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['name']      = $this->input->post('name');
        $data['email']     = $this->input->post('email');
        $data['message']   = $this->input->post('message');

        $this->db->insert('contact', $data);

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

        $this->db->where('idContact', $id);
        $this->db->update('contact', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
