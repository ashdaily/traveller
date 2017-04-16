<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Model {

    public function showAllPages() {
        $this->db->select('*');
        $this->db->from('static_pages');
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function addPage() {
        $field = array(
            'page_name' => $this->input->post('page_name'),
            'page_content' => $this->input->post('page_content'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('static_pages', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editPage() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('static_pages');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updatePage() {
        $id = $this->input->post('txtId');
        $field = array(
            'page_name' => $this->input->post('page_name'),
            'page_content' => $this->input->post('page_content'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        $this->db->update('static_pages', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePage() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('static_pages');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function packages($package_name = '') {
        $p_name = humanize($package_name);
        $this->db->select('*');
        $this->db->select('tbl_packages.id as package_id');
        $this->db->from('tbl_packages');
        $this->db->select('city.name as city_name');
        $this->db->join('city', 'city.id = tbl_packages.city_id');
        $this->db->select('countries.name as contry_name');
        $this->db->join('countries', 'city.countrycode = countries.iso3');
        $this->db->select('continents.name as continent_name');
        $this->db->join('continents', 'continents.code = tbl_packages.continent_code');
        $this->db->where('tbl_packages.package_name', $p_name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_c_users(){
        $sql = $this->db->query('SELECT * from c_users');
        return $sql->result();
    }
    

}
