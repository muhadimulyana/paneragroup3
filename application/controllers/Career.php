<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Contact_m', 'contact');
	// 	//$this->load->model('Menu_m');
	// }

	public function index()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('career/index', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function detail()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('career/detail', $data, true);
		$this->load->view('layout/main', $data);
	}
}
