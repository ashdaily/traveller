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
    
    public function showAllUsers() {
        $this->db->select('*');
        $this->db->from('c_users');
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function deleteUser() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('c_users');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function flight_booking() {
        $field = array(
            'flight_id' => $this->input->post('flight_id'),
            'c_f_name' => $this->input->post('c_f_name'),
            'c_l_name' => $this->input->post('c_l_name'),
            'c_email' => $this->input->post('c_email'),
            'c_phone' => $this->input->post('c_phone'),
            'adults' => $this->input->post('adults'),
            'children' => $this->input->post('children'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('flight_booking', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function forex_users(){
        $field = array(
            'currency_name' => $this->input->post('forex_currency_name'),
            'amount' => $this->input->post('forex_amount'),
            'name' => $this->input->post('forex_name'),
            'nationality' => $this->input->post('forex_nationality'),
            'email' => $this->input->post('forex_email'),
            'phoneno' => $this->input->post('forex_phoneno')
            );
        $this->db->insert('forex_users',$field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
}