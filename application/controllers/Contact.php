<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('contact/index', $data, true);
        $this->load->view('layout/main', $data);
    }

}
