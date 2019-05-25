<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class borrow extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/borrow_view');
        $this->load->view('header');
    }
}