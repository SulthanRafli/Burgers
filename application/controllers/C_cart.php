<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_product');
    }

    public function index()
    {
        $data["page"]           = "list_cart";
        $data['products']       = $this->M_product->getAllLimit(3);

        $this->load->view('template/index', $data);
    }

    public function load_cart()
    {
        if ($this->session->has_userdata('cart')) {
            $status = 200;
            $test3 = $this->session->userdata('cart');
        } else {
            $status = 204;
            $test3 = array();
        }

        echo json_encode(array(
            'status' => $status,
            'result' => $test3,
        ));
    }

    public function add_cart()
    {
        $id     = $this->input->post('idProduct');
        $name   = $this->input->post('name');
        $img    = $this->input->post('image');
        $price  = $this->input->post('price');
        $decs   = $this->input->post('description');
        $qty    = $this->input->post('qty');

        $cart                   = new stdClass();
        $cart->idProduct        = $id;
        $cart->name             = $name;
        $cart->image            = $img;
        $cart->price            = $price;
        $cart->description      = $decs;
        $cart->qty              = $qty;

        if ($this->session->has_userdata('cart')) {
            $listCart = $this->session->userdata('cart');

            foreach ($listCart as $lc) {
                if ($lc->idProduct == $id) {
                    $lc->qty = $lc->qty + 1;
                }
            }

            if (!$this->existsInArray($id, $listCart)) {
                array_push($listCart, $cart);
            }
        } else {
            $listCart      = array();
            array_push($listCart, $cart);
        }

        $data = [
            'cart' => $listCart,
        ];

        $this->session->set_userdata($data);

        echo json_encode(array(
            'status' => 200,
        ));
    }

    public function delete_cart($id)
    {
        if ($this->session->has_userdata('cart')) {
            $listCart = $this->session->userdata('cart');
            foreach ($listCart as $k => $v) {
                if ($v->idProduct == $id) {
                    unset($listCart[$k]);
                }
            }

            if ($listCart == []) {
                $this->session->unset_userdata('cart');
            } else {
                $data = [
                    'cart' => $listCart,
                ];

                $this->session->set_userdata($data);
            }

            echo json_encode(array(
                'status' => 200,
            ));
        } else {
            echo json_encode(array(
                'status' => 500,
            ));
        }
    }

    public function update_cart()
    {
        if ($this->session->has_userdata('cart')) {
            $jumlah_data    = count($this->input->post('qty'));
            $qty            = $this->input->post('qty');
            $idProduct      = $this->input->post('idProduct');
            $name           = $this->input->post('name');
            $image          = $this->input->post('image');
            $price          = $this->input->post('price');
            $description    = $this->input->post('description');
            $sub_data       = array();

            for ($i = 0; $i < $jumlah_data; $i++) {
                $cart               = new stdClass();
                $cart->qty          = $qty[$i];
                $cart->idProduct    = $idProduct[$i];
                $cart->name         = $name[$i];
                $cart->image        = $image[$i];
                $cart->price        = $price[$i];
                $cart->description  = $description[$i];
                $sub_data[]         = $cart;
            }

            $data = [
                'cart' => $sub_data,
            ];

            $this->session->set_userdata($data);

            echo json_encode(array(
                'status' => 200,
            ));
        } else {
            echo json_encode(array(
                'status' => 500,
            ));
        }
    }

    public function update_cart_id()
    {
        $id     = $this->input->post('idProduct');
        $name   = $this->input->post('name');
        $img    = $this->input->post('image');
        $price  = $this->input->post('price');
        $decs   = $this->input->post('description');
        $qty    = $this->input->post('qty');

        $cart                   = new stdClass();
        $cart->idProduct        = $id;
        $cart->name             = $name;
        $cart->image            = $img;
        $cart->price            = $price;
        $cart->description      = $decs;
        $cart->qty              = $qty;

        if ($this->session->has_userdata('cart')) {
            $listCart = $this->session->userdata('cart');

            foreach ($listCart as $lc) {
                if ($lc->idProduct == $id) {
                    $lc->qty = $qty;
                }
            }

            if (!$this->existsInArray($id, $listCart)) {
                array_push($listCart, $cart);
            }
        } else {
            $listCart      = array();
            array_push($listCart, $cart);
        }

        $data = [
            'cart' => $listCart,
        ];

        $this->session->set_userdata($data);

        echo json_encode(array(
            'status' => 200,
        ));
    }

    public function delete_all_cart()
    {
        if ($this->session->has_userdata('cart')) {

            $this->session->unset_userdata('cart');

            echo json_encode(array(
                'status' => 200,
            ));
        } else {
            echo json_encode(array(
                'status' => 500,
            ));
        }
    }

    function existsInArray($entry, $array)
    {
        foreach ($array as $compare) {
            if ($compare->idProduct == $entry) {
                return true;
            }
        }
        return false;
    }
}
