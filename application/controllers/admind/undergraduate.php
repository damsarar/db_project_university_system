<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class undergraduate extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/undergraduate_view');
        $this->load->view('header');
    }
}