<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data = array(
            "title" => "User Access",
            "content" => "default"
        );
        $this->load->view('wrapper', $data);  
        
    }

    public function access()
    {
        $data = array(
            "title" => "User Access",
            "content" => "user/access"
        );
        $this->load->view('wrapper', $data);  
        
    }

}

/* End of file User.php */
// $this->load->view('View File', $data, FALSE);
