<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_product');
		$this->load->model('M_user');
		$this->load->model('M_contact');
		$this->load->model('M_transaction');
		$this->load->model('M_detail_transaction');
	}

	public function index()
	{
		$data['top_products']	    = $this->M_detail_transaction->getTopProductLimit(6);
		$data['product']   		    = $this->M_product->getAll();
		$data['product_limits']     = $this->M_product->getAllLimit(6);
		$data['total_user']         = $this->M_user->getTotalUser();
		$data['total_transaction']  = $this->M_transaction->getTotalTransaction();
		$data['total_contact']      = $this->M_contact->getTotalContact();
		$data["page"] 	   		  	= "home";

		$this->load->view('template/index', $data);
	}

	public function test()
	{
		$data["page"] 	   		  = "test";

		$this->load->view('template_admin/index', $data);
	}
}
