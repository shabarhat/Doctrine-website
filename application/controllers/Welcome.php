<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		echo "Welcome to codeigniter framework";
		// $this->load->view('welcome_message');
	}
	public function about()
	{
		//echo "This is my own function";
		$this->load->view('myview');
	}
}
