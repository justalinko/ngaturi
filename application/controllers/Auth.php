<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

	public function index()
	{
		$this->load->view('auth/signin');
	}
	public function signin(){
		$this->load->view('auth/signin');
	}
	public function register(){
		$this->load->view('auth/register');
	}
}