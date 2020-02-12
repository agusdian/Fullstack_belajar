<?php
  switch($content) {
    
    case "user/access":
      $this->load->view('user/access');
    break;

    case "user/access_add":
      $this->load->view('user/access_add');
    break;

    case "user/access_edit":
      $this->load->view('user/access_edit');
    break;
    
    default:
      $this->load->view('template/default');
  }
?>