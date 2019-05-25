<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class author extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/author_view');
        $this->load->view('header');
    }
}