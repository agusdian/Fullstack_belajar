<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("User_access_model", 'user_access');
        $this->load->library('form_validation'); // load library form validation
    }
    
    public function index()
    {
        $data = array(
            "title" => "Apps",
            "content" => "default"
        );
        $this->load->view('wrapper', $data);  
        
    }

    public function access()
    {
        $data = array(
            "title" => "User Access",
            "content" => "user/access",
            "ua" => $this->user_access->getAll()
        );
       
        
        $this->load->view('wrapper', $data);  
    }

    public function access_add()
    {
        $data = array(
            "title" => "Add Access",
            "content" => "user/access_add",
        );
        
        $this->load->view('wrapper', $data); 

        $ua = $this->user_access;

        $validation = $this->form_validation;
        $validation->set_rules($ua->rules());

        if ($validation->run()) {
            $ua->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('user/access'));
        } 
                
    }

    public function access_delete($id_user_access = null) {
        if (!isset($id_user_access)) {
            show_404();
        }
        
        if ($this->user_access->delete($id_user_access)) {
            redirect(site_url('user/access'));
        }
    }

    public function access_edit($id_user_access = null) {

        if (!isset($id_user_access)) {
            redirect('access');
        }
       
        $user_access = $this->user_access;

        $validation = $this->form_validation; 
        $validation->set_rules($user_access->rules()); 

        if ($validation->run()) {
            $user_access->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('user/access'));
        }

        $data = array(
            "title" => "Edit User Access",
            "content" => "user/access_edit",
            "user_access" => $user_access->getById($id_user_access)
        );

        if (!$data["user_access"]) {
            show_404();
        }
        
        $this->load->view("wrapper", $data);
    }

}

/* End of file User.php */
// $this->load->view('View File', $data, FALSE);
