<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class labsession extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/lab_session_view');
        $this->load->view('header');
    }
}