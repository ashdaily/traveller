<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Model {

    public function showHomePackage() {
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
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

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
            $by_company = '';
            $company_website = '';
            $contact_person = '';
        }
        $images_name = '';
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

    public function addPackageImages() {
        $query = $this->db->select('*')->from('tbl_packages')->order_by('id', 'DESC')->limit(1)->get();
        $result = $query->result();
        $id = $result[0]->id;
        if ($_FILES['files']['name'] != '') {
            $sql = $this->db->select('*')->from('tbl_packages')->where('updated_at >', $result[0]->created_at)->order_by('updated_at', 'DESC')->limit(1)->get();
            if ($sql->num_rows() > 0) {
                $result1 = $sql->result();
                $id = $result1[0]->id;
                $images = $result1[0]->package_images;
                if ($images != '') {
                    $explode = explode(',', $images);
                    for ($i = 0; $i < count($explode); $i++) {
                        unlink('./upload/' . $explode[$i]);
                    }
                }
            } else {
                $images = $result[0]->package_images;
                if ($images != '') {
                    $explode = explode(',', $images);
                    for ($i = 0; $i < count($explode); $i++) {
                        unlink('./upload/' . $explode[$i]);
                    }
                }
            }
            $config["upload_path"] = './upload/';
            $config["allowed_types"] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            for ($count = 0; $count < count($_FILES["files"]["name"]); $count++) {
                $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
                $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
                $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
                $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
                $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
                if ($this->upload->do_upload('file')) {
                    $data = $this->upload->data();
                } else {
                    return false;
                }
            }
            $image = implode(',', $_FILES['files']['name']);
            $field = array(
                'package_images' => $image
            );
            $this->db->where('id', $id);
            $this->db->update('tbl_packages', $field);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }return true;
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
            $by_company = '';
            $company_website = '';
            $contact_person = '';
        }
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
        $sql = $this->db->get_where('tbl_packages', array('id' => $id));
        $result = $sql->result();
        $images = $result[0]->package_images;
        if ($images != '') {
            $explode = explode(',', $images);
            for ($i = 0; $i < count($explode); $i++) {
                unlink('./upload/' . $explode[$i]);
            }
        }
        $this->db->where('id', $id);
        $this->db->delete('tbl_packages');
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
