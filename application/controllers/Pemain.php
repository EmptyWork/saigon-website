<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemain extends CI_Controller {

	public function view($page) {
    $this->load->helper('url');
    $data['title'] = ucfirst($page);
    $data['menus'] = ['home', 'sinopsis', 'review'];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('pages/pemain/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

}