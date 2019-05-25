<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookcopy extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/book_copy_view');
        $this->load->view('header');
    }
}