<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_contact');
    }

    public function index()
    {
        $data["page"] = "contact";

        $this->load->view('template/index', $data);
    }

    public function save()
    {
        $result     = $this->M_contact->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}
