<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("user/Access_model", 'user_access');
        $this->load->library('form_validation');
    }

    // Objek untuk membuka index dari user access
    public function index()
    {
        $data = array(
            "title" => "User Access",
            "content" => "user/access",
            "ua" => $this->user_access->getAll()
        );
        $this->load->view('wrapper', $data);  

    }

    // Fungsi untuk membuka tambah user access
    public function add()
    {
        $data = array(
            "title" => "Add Access",
            "content" => "user/access/add",
        );
        
        $this->load->view('wrapper', $data); 

        $user_access = $this->user_access; // load model

        $validation = $this->form_validation; // load form validation
        $validation->set_rules($user_access->rules());

        if ($validation->run()) {
            $user_access->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('user/access'));
        } 
                
    }

    public function delete($id_user_access = null) {
        if (!isset($id_user_access)) {
            show_404();
        }
        
        if ($this->user_access->delete($id_user_access)) {
            redirect(site_url('user/access'));
        }
    }

    public function edit($id_user_access = null) {

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
            "content" => "user/access/edit",
            "user_access" => $user_access->getById($id_user_access)
        );

        if (!$data["user_access"]) {
            show_404();
        }
        
        $this->load->view("wrapper", $data);
    }



}

/* End of file Access.php */
