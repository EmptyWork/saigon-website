<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home') {
    $this->load->helper('url');
    $data['title'] = ucfirst($page);
    $data['menus'] = ['home', 'sinopsis', 'review'];

    $this->load->view('templates/header', $data);
    if($page == 'home') $this->load->view('templates/hero');
    $this->load->view('templates/navbar', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

}