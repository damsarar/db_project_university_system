<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uses extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/uses_view');
        $this->load->view('header');
    }
}