<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function gallery()
	{
		$this->load->view('includes/header');
		$this->load->view('gallery');
		$this->load->view('includes/footer');
	}

}
