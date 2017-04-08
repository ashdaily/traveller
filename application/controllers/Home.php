<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->home();
    }

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('package');
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

}
