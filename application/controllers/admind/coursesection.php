<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coursesection extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/course_section_view');
        $this->load->view('header');
    }
}