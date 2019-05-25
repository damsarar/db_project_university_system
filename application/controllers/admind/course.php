<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/course_view');
        $this->load->view('header');
    }
}