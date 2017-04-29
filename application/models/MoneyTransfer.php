<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MoneyTransfer extends CI_Model {

    public function send_money() {
        $field = array(
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'country' => $this->input->post('country'),
            'nationality' => $this->input->post('nationality'),
            'account_sent' => $this->input->post('account_sent'),
            'r_first_name' => $this->input->post('r_first_name'),
            'r_middle_name' => $this->input->post('r_middle_name'),
            'r_last_name' => $this->input->post('r_last_name'),
            'r_city' => $this->input->post('r_city'),
            'r_state' => $this->input->post('r_state'),
            'r_country' => $this->input->post('r_country'),
            'transaction_purpose' => $this->input->post('transaction_purpose'),
            'bank_name' => $this->input->post('bank_name'),
            'beneficiary_name' => $this->input->post('beneficiary_name'),
            'account_number' => $this->input->post('account_number'),
            'ifsc_code' => $this->input->post('ifsc_code'),
            'account_type' => $this->input->post('account_type'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('money_transfer', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
