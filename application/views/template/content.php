<?php
  switch($content) {
    
    case "user/access":
      $this->load->view('user/access/index');
    break;

    case "user/access/add":
      $this->load->view('user/access/add');
    break;

    case "user/access/edit":
      $this->load->view('user/access/edit');
    break;
    
    default:
      $this->load->view('template/default');
  }
?>