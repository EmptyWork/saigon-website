<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home') {
    $data['title'] = ucfirst($page);

    
    $this->load->view('templates/header', $data);

    if($page == 'home') $this->load->view('templates/hero');
    
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

}