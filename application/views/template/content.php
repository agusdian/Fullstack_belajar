<?php
  switch($content) {
    
    case "user/access":
      $this->load->view('user/access');
    break;

    case "user/access_add":
      $this->load->view('user/access_add');
    break;
    
    default:
      $this->load->view('template/default');
  }
?>