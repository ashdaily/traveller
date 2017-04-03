<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Model {

    public function showAllPackage() {
        $this->db->select('*');
        $this->db->select('tbl_packages.id as package_id');
        $this->db->from('tbl_packages');
        $this->db->select('city.name as city_name');
        $this->db->join('city', 'city.id = tbl_packages.city_id');
        $this->db->select('countries.name as contry_name');
        $this->db->join('countries', 'city.countrycode = countries.iso3');
        $this->db->select('continents.name as continent_name');
        $this->db->join('continents', 'continents.code = tbl_packages.continent_code');
        $this->db->order_by('tbl_packages.created_at', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getAllContinents() {
        $query = $this->db->get('continents');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getAllCity() {
        $query = $this->db->get('city');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getAllCountry() {
        $query = $this->db->get('countries');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getCountry() {
        $code = $this->input->get('code');
        $this->db->where('continent_code', $code);
        $query = $this->db->get('countries');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getCity() {
        $code = $this->input->get('code');
        $this->db->where('countrycode', $code);
        $query = $this->db->get('city');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function addPackage() {
        $by_company = $this->input->post('by_company');
        $company_website = $this->input->post('company_website');
        $contact_person = $this->input->post('contact_person');
        if ($by_company == '' && $company_website == '' && $contact_person == '') {
            $by_company = NULL;
            $company_website = NULL;
            $contact_person = NULL;
        }
        $images_name = "";
//        if (is_array($_FILES)) {
//            print_r($_FILES);die;
//            foreach ($_FILES['package_images']['name'] as $name => $value) {
//                $file_name = explode(".", $_FILES['package_images']['name'][$name]);
//                $allowed_ext = array("jpg", "jpeg", "png", "gif");
//                if (in_array($file_name[1], $allowed_ext)) {
//                    $new_name = md5(rand()) . '.' . $file_name[1];
//                    $sourcePath = $_FILES['package_images']['tmp_name'][$name];
//                    $targetPath = "uploads/" . $new_name;
//                    if (move_uploaded_file($sourcePath, $targetPath)) {
//                        print_r($_FILES);die;
//                    }
//                }
//            }
//        }
//        print_r($_FILES);die;
        $field = array(
            'continent_code' => $this->input->post('continent_code'),
            'countrycode' => $this->input->post('country_code'),
            'city_id' => $this->input->post('city_id'),
            'package_name' => $this->input->post('package_name'),
            'duration' => $this->input->post('duration'),
            'description' => $this->input->post('description'),
            'mode_of_travel' => $this->input->post('mode_of_travel'),
            'price' => $this->input->post('price'),
            'taxi_pickups' => $this->input->post('taxi_pickups'),
            'food' => $this->input->post('food'),
            'utilities' => $this->input->post('utilities'),
            'package_images' => $images_name,
            'by_company' => $by_company,
            'company_website' => $company_website,
            'contact_person' => $contact_person,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_packages', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editPackage() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_packages');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updatePackage() {
        $by_company = $this->input->post('by_company');
        $company_website = $this->input->post('company_website');
        $contact_person = $this->input->post('contact_person');
        if ($by_company == '' && $company_website == '' && $contact_person == '') {
            $by_company = NULL;
            $company_website = NULL;
            $contact_person = NULL;
        }
        $images_name = '';
        $id = $this->input->post('txtId');
        $field = array(
            'continent_code' => $this->input->post('continent_code'),
            'countrycode' => $this->input->post('country_code'),
            'city_id' => $this->input->post('city_id'),
            'package_name' => $this->input->post('package_name'),
            'duration' => $this->input->post('duration'),
            'description' => $this->input->post('description'),
            'mode_of_travel' => $this->input->post('mode_of_travel'),
            'price' => $this->input->post('price'),
            'taxi_pickups' => $this->input->post('taxi_pickups'),
            'food' => $this->input->post('food'),
            'utilities' => $this->input->post('utilities'),
            'package_images' => $images_name,
            'by_company' => $by_company,
            'company_website' => $company_website,
            'contact_person' => $contact_person,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_packages', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePackage() {
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $this->db->delete('tbl_packages');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
