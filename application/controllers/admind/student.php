<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/student_view');
        $this->load->view('header');
    }
}