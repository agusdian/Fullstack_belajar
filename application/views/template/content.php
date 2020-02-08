<?php
  switch($content) {
    
    case "user/access":
      $this->load->view('user/access');
    break;
    
    default:
      $this->load->view('template/default');
  }
?>