<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $data['contents'] = $this->load->view('profile/index', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function vision()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('profile/vision', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function eri()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('profile/eri', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function era()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('profile/era', $data, true);
		$this->load->view('layout/main', $data);
	}
}
