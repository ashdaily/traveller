<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {
    
    public function customer_detail() {
        $field = array(
            'package_id' => $this->input->post('package_id'),
            'package_name' => $this->input->post('package_name'),
            'c_f_name' => $this->input->post('c_f_name'),
            'c_l_name' => $this->input->post('c_l_name'),
            'c_email' => $this->input->post('c_email'),
            'c_phone' => $this->input->post('c_phone'),
            'adults' => $this->input->post('adults'),
            'children' => $this->input->post('children'),
            'adults' => date('Y-m-d H:i:s')
        );
        $this->db->insert('c_users', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}