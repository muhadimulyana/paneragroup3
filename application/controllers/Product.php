<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function resin()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('product/bijih', $data, true);
		$this->load->view('layout/main', $data);
	}

	public function plastic_bag()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('product/bag', $data, true);
		$this->load->view('layout/main', $data);
	}

}
