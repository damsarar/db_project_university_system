<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class professor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('professor/professor_model');

    }


    public function index()
    {
        //$this->load->view('admin/professor_view');
        $this->load->view('header');

        //load the database
        $this->load->database();
        //load the model
        //$this->load->model('professor_model');
        //load the method of model
        $data['h']=$this->professor_model->professor_select('UOCMP00002');
        //var_dump($data);
        //return the data in view
        $this->load->view('professor/professor_view',$data);
        //$this->load->view('edit_data_view', $data);
    }

//


}