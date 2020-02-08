<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array(
            "title" => "Dashboard",
            "content" => "default"
        );
        $this->load->view('wrapper', $data);  
    }

}

/* End of file Home.php */
