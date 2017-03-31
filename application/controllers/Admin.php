<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (!isset($_SESSION['username'])) {
            redirect('admin/login', 'refresh');
        }
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function login() {
        if (isset($_SESSION['username'])) {
            redirect('admin', 'refresh');
        }
        $this->load->view('admin/login');
    }

    public function login_check() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $check = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
        if (count($check) > 0) {
            $this->session->username = $username;
            $data['login_status'] = 'success';
            echo json_encode($data);
        } else {
            $data['login_status'] = 'invalid';
            echo json_encode($data);
        }
    }

    public function package($type = '', $id = '') {
        $this->load->view('admin/header');
        $this->load->view('admin/package');
        $this->load->view('admin/footer');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }

}
