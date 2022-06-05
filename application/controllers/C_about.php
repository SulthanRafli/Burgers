<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_about extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["page"] = "about";

        $this->load->view('template/index', $data);
    }

    public function test()
    {
        $data["page"] = "about";

        $this->load->view('template/index', $data);
    }
}
