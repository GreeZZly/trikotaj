<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main/htmlheader.html');
		$this->load->view('main/header');
		$this->load->view('main/navbar');
		$this->load->view('main/commercial');
		$this->load->view('main/reviews');
		$this->load->view('main/soclikes');
		$this->load->view('main/likebox');
		$this->load->view('main/banner');
		$this->load->view('main/mostsale');
		$this->load->view('main/banner1');
		$this->load->view('main/newprod');
		$this->load->view('main/counter');
		$this->load->view('main/minimap');
		$this->load->view('main/footer');
		$this->load->view('main/htmlfooter.html');
	}
}