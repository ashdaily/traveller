<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

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
    public function index() {
        echo 'Logged in';
        echo $_SESSION['data'];
    }

    public function login() {
        $this->load->view('admin/login');
    }

    public function login_check() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == 'jerry' && $password == 'pass') {
            $_SESSION['data'] = 'success';
            redirect('/admincontroller');
            
        } else {
            $_SESSION['data'] = 'error';
            redirect('/admincontroller/login');
        }
    }

}
