<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->view('homepages/header');
        $this->load->view('homepages/home');
        $this->load->view('homepages/footer');
    }
    
    public function destinations() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/destinations');
        $this->load->view('homepages/footer');
    }
    
    public function about() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/about');
        $this->load->view('homepages/footer');
    }
    
    public function testimonials() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/testimonials');
        $this->load->view('homepages/footer');
    }
    
    public function contact() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/contact');
        $this->load->view('homepages/footer');
    }
    
    public function bookings() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/bookings');
        $this->load->view('homepages/footer');
    }
    
    public function family_vacations() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/family_vacations');
        $this->load->view('homepages/footer');
    }
    
    public function vacation() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/vacation');
        $this->load->view('homepages/footer');
    }
    
    public function vacations() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/vacations');
        $this->load->view('homepages/footer');
    }
    
    public function offers() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/offers');
        $this->load->view('homepages/footer');
    }
    
    public function moneyExchange() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/moneyExchage');
        $this->load->view('homepages/footer');
    }
    
    public function moneyExchageRates() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/moneyExchangeRates');
        $this->load->view('homepages/footer');
    }
    
    public function bahamas_cruises() {
        $this->load->view('homepages/header');
        $this->load->view('homepages/bahamas_cruises');
        $this->load->view('homepages/footer');
    }

}
