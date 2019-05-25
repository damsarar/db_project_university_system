<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enroll extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/enroll_view');
        $this->load->view('header');
    }
}