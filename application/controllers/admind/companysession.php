<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class companysession extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/company_session_view');
        $this->load->view('header');
    }
}