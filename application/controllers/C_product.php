<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_product');
        $this->load->model('M_detail_transaction');
    }

    public function index()
    {
        $data['keyword']           = $this->input->post('keyword') ? $this->input->post('keyword') : null;

        $config['base_url']        = base_url("C_product/index");
        $config['total_rows']      = $this->M_product->countAllData($data['keyword']);
        $config['per_page']        = 8;
        $config['num_links']       = 2;

        $config["full_tag_open"]   = "<div class='paginator'>";
        $config["full_tag_close"]  = "</div>";

        $config["next_link"]       = "<i class='fas fa-arrow-right'></i>";
        $config["next_tag_open"]   = "<a class='paginator-nav'>";
        $config["next_tag_close"]  = "</a>";

        $config["prev_link"]       = "<i class='fas fa-arrow-left'></i>";
        $config["prev_tag_open"]   = "<a class='paginator-nav'>";
        $config["prev_tag_close"]  = "</a>";

        $config["cur_tag_open"]    = "<span class='active paginator-item'>";
        $config["cur_tag_close"]   = "</span>";

        $config["num_tag_open"]    = "<span class='paginator-item'>";
        $config["num_tag_close"]   = "</span>";

        $config['attributes']      = array('class' => 'paginator-nav');

        $this->pagination->initialize($config);

        $data["start"]            = $this->uri->segment(3);
        $data['product']          = $this->M_product->getAllPagination($config['per_page'], $data["start"], $data["keyword"]);
        $data['top_products']     = $this->M_detail_transaction->getTopProductLimit(3);
        $data['products']         = $this->M_product->getAllLimit(3);
        $data["page"]             = "products";

        $this->load->view('template/index', $data);
    }

    public function view($id)
    {
        $data["page"]             = "detail_product";
        $data['detail_product']   = $this->M_product->getDetailProduct($id);

        $this->load->view('template/index', $data);
    }
}
