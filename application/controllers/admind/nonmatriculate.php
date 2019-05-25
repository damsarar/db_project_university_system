<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nonmatriculate extends CI_Controller {


    public function index()
    {
        $this->load->view('admin/non_matriculate_view');
        $this->load->view('header');
    }
}