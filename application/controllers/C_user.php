<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_user');
        $this->load->model('M_transaction');
        $this->load->model('M_detail_transaction');
    }

    public function index()
    {
        $data["orders"]    = $this->M_transaction->getOrdersByIdUser($this->session->userdata('idUser'));
        $data["page"]      = "dashboard_user";

        $this->load->view('template/index', $data);
    }

    public function view($id)
    {
        $data["detail_user"]    = $this->M_user->getById($id);
        $data["page"]           = "detail_user";

        $this->load->view('template/index', $data);
    }

    public function orders()
    {
        $config['base_url']        = base_url("C_user/orders");
        $config['total_rows']      = count($this->M_transaction->countAllDataByIdUser($this->session->userdata('idUser')));
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

        $data["orders"]           = $this->M_transaction->getOrdersByIdUserPagination($config['per_page'], $data["start"], $this->session->userdata('idUser'));
        $data["detail_orders"]    = $this->M_detail_transaction->getDetailOrdersByIdUser($this->session->userdata('idUser'));
        $data["page"]             = "orders_user";

        $this->load->view('template/index', $data);
    }

    public function login()
    {
        $data["page"] = "login";

        $this->load->view('template/index', $data);
    }

    public function register()
    {
        $data["page"] = "register";

        $this->load->view('template/index', $data);
    }

    public function check_login()
    {
        $result     = $this->M_user->checkUsernamePassword();
        if ($result) {
            $data = [
                'idUser' => $result->idUser,
                'firstName' => $result->firstName,
                'lastName' => $result->lastName,
                'gender' => $result->gender,
                'image' => $result->image,
                'username' => $result->username,
                'email' => $result->email,
                'password' => $result->password,
                'address' => $result->address,
                'urbanVillage' => $result->urbanVillage,
                'district' => $result->district,
                'city' => $result->city,
                'province' => $result->province,
                'posCode' => $result->posCode,
                'phone' => $result->phone,
                'kategori' => $result->kategori,
                'isLogin' => true
            ];
            $this->session->set_userdata($data);
            echo json_encode(array(
                'kategori' => $result->kategori,
                'status' => true,
            ));
            return;
        } else {
            echo json_encode(array(
                'kategori' => null,
                'status' => false,
            ));
            return;
        }
    }

    public function save()
    {
        $check      = $this->M_user->checkUser();
        if (!$check) {
            $result     = $this->M_user->save();
            $status     = $result;

            echo json_encode(array(
                'status' => $status,
            ));
            return;
        } else {
            echo json_encode(array(
                'status' => 503,
            ));
            return;
        }
    }

    public function update($id)
    {
        $user     = $this->M_user->getById($id);
        $email    = $this->input->post('email');
        if ($user->email == $email) {
            $image      = !empty($_FILES) ?  $_FILES['file']['name'] : null;

            if ($image) {
                $config['upload_path']          = './assets/upload/profile/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $old_image  = $user->image;
                    if ($old_image != 'images/default/male-default.png' && $old_image != 'images/default/male-default.png') {
                        unlink(FCPATH . 'assets/upload/profile/' . $old_image);
                    }
                    $new_image  = $this->upload->data('file_name');
                    $result     = $this->M_user->update($id, $new_image);
                    $status     = $result;

                    echo json_encode(array(
                        'status' => $status,
                    ));
                    return;
                } else {
                    echo json_encode(array(
                        'status' => 504,
                    ));
                    return;
                }
            } else {
                $old_image  = $user->image;
                $result     = $this->M_user->update($id, $old_image);
                $status     = $result;

                echo json_encode(array(
                    'status' => $status,
                ));
                return;
            }
        } else {
            $check      = $this->M_user->checkUser();
            if (!$check) {
                $image      = !empty($_FILES) ?  $_FILES['file']['name'] : null;

                if ($image) {
                    $config['upload_path']          = './assets/upload/profile/';
                    $config['allowed_types']        = 'jpeg|jpg|png';
                    $config['max_size']             = 2048;

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file')) {
                        $old_image  = $user->image;
                        if ($old_image != 'images/default/male-default.png' && $old_image != 'images/default/male-default.png') {
                            unlink(FCPATH . 'assets/upload/profile/' . $old_image);
                        }
                        $new_image  = $this->upload->data('file_name');
                        $result     = $this->M_user->update($id, $new_image);
                        $status     = $result;

                        echo json_encode(array(
                            'status' => $status,
                        ));
                        return;
                    } else {
                        echo json_encode(array(
                            'status' => 504,
                        ));
                        return;
                    }
                } else {
                    $old_image  = $user->image;
                    $result     = $this->M_user->update($id, $old_image);
                    $status     = $result;

                    echo json_encode(array(
                        'status' => $status,
                    ));
                    return;
                }
            } else {
                echo json_encode(array(
                    'status' => 503,
                ));
                return;
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
