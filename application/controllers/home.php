<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->data['page_title'] = 'Home';
	}

	public function index(){

		$this->load->view('header', $this->data);
		$this->load->view('home');
		$this->load->view('footer');
	}
}

