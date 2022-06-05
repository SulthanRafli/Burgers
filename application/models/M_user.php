<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getTotalUser()
    {
        $this->db->from('user');
        return $this->db->count_all_results();
    }

    function checkUsernamePassword()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('visible', 1);
        $query = $this->db->get();
        return $query->row();
    }

    function checkUser()
    {
        $email = $this->input->post('email');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('visible', 1);
        $query = $this->db->get();
        return $query->row();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('idUser', $id);
        $this->db->where('visible', 1);
        $query = $this->db->get();
        return $query->row();
    }

    function save()
    {
        $this->db->trans_begin();

        $data['firstName']          = $this->input->post('firstName');
        $data['lastName']           = $this->input->post('lastName');
        $data['gender']             = $this->input->post('gender');
        $data['image']              = $this->input->post('gender') == "L" ? "images/default/male-default.png" : "images/default/female-default.png";
        $data['username']           = $this->input->post('username');
        $data['password']           = $this->input->post('password');
        $data['email']              = $this->input->post('email');
        $data['address']            = $this->input->post('address');
        $data['urbanVillage']       = $this->input->post('urbanVillage');
        $data['district']           = $this->input->post('district');
        $data['city']               = $this->input->post('city');
        $data['province']           = $this->input->post('province');
        $data['posCode']            = $this->input->post('posCode');
        $data['phone']              = $this->input->post('phone');

        $this->db->insert('user', $data);

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

        $data['firstName']          = $this->input->post('firstName');
        $data['lastName']           = $this->input->post('lastName');
        $data['gender']             = $this->input->post('gender');
        $data['username']           = $this->input->post('username');
        $data['image']              = $image;
        $data['email']              = $this->input->post('email');
        $data['address']            = $this->input->post('address');
        $data['urbanVillage']       = $this->input->post('urbanVillage');
        $data['district']           = $this->input->post('district');
        $data['city']               = $this->input->post('city');
        $data['province']           = $this->input->post('province');
        $data['posCode']            = $this->input->post('posCode');
        $data['phone']              = $this->input->post('phone');

        $this->db->where('idUser', $id);
        $this->db->update('user', $data);

        $data = [
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'gender' => $this->input->post('gender'),
            'image' => $image,
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'urbanVillage' => $this->input->post('urbanVillage'),
            'district' => $this->input->post('district'),
            'city' => $this->input->post('city'),
            'province' => $this->input->post('province'),
            'posCode' => $this->input->post('posCode'),
            'phone' => $this->input->post('phone'),
        ];
        $this->session->set_userdata($data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
