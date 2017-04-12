<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->home();
        $this->load->model('foreignExchange');
    }

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('package');
        $this->load->model('users');
        $this->load->model('foreignExchange');
    }

    public function home() {
        $data['title'] = 'Fun Travel Roppongi Azabujuban Tokyo | Book Flights, Holiday Packages, Money Exchange';
        $data['result'] = $this->package->showHomePackage();
        $this->load->view('front/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/footer');
    }

    public function languageSelector() {
        $data['title'] = 'Fun Travel Roppongi Azabujuban Tokyo | Book Flights, Holiday Packages, Money Exchange';
        $this->load->view('front/header', $data);
        $this->load->view('front/home');
        $this->load->view('front/footer');
    }
 
    public function package($package_name) {
        $data['title'] = 'Fun Travel Roppongi Azabujuban Tokyo | Book Flights, Holiday Packages, Money Exchange';
        $data['result'] = $this->package->packages($package_name);
        $data['msg'] = '';
        $this->load->view('front/header', $data);
        $this->load->view('front/package', $data);
        $this->load->view('front/footer');
    }

    public function customer_detail() {
        $result = $this->users->customer_detail();
        $this->load->library('email');
        if ($result == TRUE) {
            $this->email->from($this->input->post('c_email'), $this->input->post('c_f_name'));
            $this->email->to('ashishsinghvardhan@gmail.com');
            $this->email->subject('Booking Query');
            $this->email->message('Testing the email class.');
            if($this->email->send()){
                $msg['success'] = true;
            } else {
                $msg['success'] = false;
            }
        } else {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function foreignExchangeOrder(){
        if(isset($_POST['submit'])){

        }else{
            $data['title'] = 'Foreign Currecy Exchange | Fun Travel'; 
            $this->load->view('front/header', $data);
            $this->load->view('front/foreignExchange');
            $this->load->view('front/footer');
        }
    }
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
        echo json_encode($noc);     

    }
    
    public function getProfit(){
        echo json_encode($this->foreignExchange->get_profit());
    }
}
