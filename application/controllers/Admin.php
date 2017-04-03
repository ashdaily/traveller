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
        $this->load->model('package');
        $this->load->model('foreignExchange');
    }

    public function index() {
        if (!isset($_SESSION['username'])) {
            redirect('admin/login', 'refresh');
        }
        $data['active'] = 'dashboard';
        $this->load->view('admin/header', $data);
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
        $password = $this->input->post('password');
        $query = $this->db->get('admin');
        $check = $query->result();
        if ($check[0]->username == $username && $check[0]->password == $password) {
            $this->session->username = $username;
            $data['login_status'] = 'success';
            echo json_encode($data);
        } else {
            $data['login_status'] = 'invalid';
            echo json_encode($data);
        }
    }

    public function showAllPackage() {
        $result = $this->package->showAllPackage();
        echo json_encode($result);
    }

    public function getAllContinents() {
        $result = $this->package->getAllContinents();
        echo json_encode($result);
    }

    public function getAllCity() {
        $result = $this->package->getAllCity();
        echo json_encode($result);
    }

    public function getAllCountry() {
        $result = $this->package->getAllCountry();
        echo json_encode($result);
    }

    public function getCountry() {
        $result = $this->package->getCountry();
        echo json_encode($result);
    }

    public function getCity() {
        $result = $this->package->getCity();
        echo json_encode($result);
    }

    public function package() {
        if (!isset($_SESSION['username'])) {
            redirect('admin/login', 'refresh');
        }
        $data['active'] = 'package';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/package');
        $this->load->view('admin/footer');
    }

    public function addPackage() {
        $result = $this->package->addPackage();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function editPackage() {
        $result = $this->package->editPackage();
        echo json_encode($result);
    }

    public function updatePackage() {
        $result = $this->package->updatePackage();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function deletePackage() {
        $result = $this->package->deletePackage();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }


    //Foreign Exchange Rates 
    public function foreignExchange(){
        $this->load->library('Simple_html_dom'); 
        $html = new Simple_html_dom();
        $html->load_file('http://www.x-rates.com/table/?from=JPY&amount=1');
        $info = $html->find('table.ratesTable td a'); 
        $currency_names = $html->find('table.ratesTable tr td');
        $noc = array(); //all the currency data stored
        foreach($currency_names as $row){   
            $noc[] = $row->plaintext;  
        }
        if (!isset($_SESSION['username'])) {
            redirect('admin/login', 'refresh');
        }else{
            if(isset($_POST['submit'])){
                $values = array(
                    'sell'=>$this->input->post('sell'),
                    'buy' => $this->input->post('buy') 
                    ); 
                $this->foreignExchange->enter_profit($values);
                $currency['profit'] = $this->foreignExchange->get_profit();
                $currency['noc'] = $noc;
                $data['active'] = 'foreignExchange';
                $this->load->view('admin/header', $data);
                $this->load->view('admin/foreignExchange',$currency);
                $this->load->view('admin/footer');
            }else{ 
                $currency['profit'] = $this->foreignExchange->get_profit();
                $currency['noc'] = $noc;
                $data['active'] = 'foreignExchange'; 
                $this->load->view('admin/header', $data); 
                $this->load->view('admin/foreignExchange',$currency);
                $this->load->view('admin/footer');
            }
        } 
    }


}
