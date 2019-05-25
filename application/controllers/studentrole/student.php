<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('student/student_model');

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
        $data['h']=$this->student_model->graduate_select('PG20170001');
        //var_dump($data);
        //return the data in view
        $this->load->view('student/student_view',$data);
        //$this->load->view('edit_data_view', $data);
    }

//


}