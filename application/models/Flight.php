<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Model {

    public function showHomeFlights() {
        $this->db->select('*');
        $this->db->from('flights');
        $this->db->order_by('created_at', 'desc');
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function showAllFlights() {
        $this->db->select('*');
        $this->db->from('flights');
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function addFlight() {
        $field = array(
            'flight_from' => $this->input->post('flight_from'),
            'flight_to' => $this->input->post('flight_to'),
            'flight_price' => $this->input->post('flight_price'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('flights', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editFlight() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('flights');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updateFlight() {
        $id = $this->input->post('txtId');
        $field = array(
            'flight_from' => $this->input->post('flight_from'),
            'flight_to' => $this->input->post('flight_to'),
            'flight_price' => $this->input->post('flight_price'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        $this->db->update('flights', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteFlight() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('flights');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchflights() {
        $to = $this->input->get('to');
        $from = $this->input->get('from');
        $this->db->select('*');
        $this->db->from('flights');
        $this->db->where('flight_from', $from);
        $this->db->where('flight_to', $to);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
