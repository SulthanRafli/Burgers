<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_checkout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["page"] = "checkout";

        $this->load->view('template/index', $data);
    }
}
