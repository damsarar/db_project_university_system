<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert extends CI_Controller {


    public function index()
    {
        $this->load->view('inserttestview');
        $this->load->view('header');
    }
}