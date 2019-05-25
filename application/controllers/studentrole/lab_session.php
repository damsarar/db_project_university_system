<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lab_session extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('professor/lab_session_model');
        $this->load->model('get_course_list_model');
        $this->load->model('get_graduate_student_list_model');


    }


    public function index()
    {
        //$this->load->view('professor/lab_session_view');
        $this->load->view('header');

        $data['groups1'] = $this->get_course_list_model->getAllGroups();
        $data['groups2'] = $this->get_graduate_student_list_model->getAllGroups();

        //load the database
        $this->load->database();
        //load the model
        //$this->load->model('professor_model');
        //load the method of model
        $data['h'] = $this->lab_session_model->lab_session_select();
        //return the data in view
        $this->load->view('student/lab_session_view', $data);
        //$this->load->view('edit_data_view', $data);
        //var_dump($data);
    }

    public function lab_session_add()
    {
        $data = array(
            'Course_code' => $this->input->post('coursecode'),
            'Graduate_SID' => $this->input->post('gradsid'),
            'Lab_session_number' => $this->input->post('labsesno'),
            'Lab_Location' => $this->input->post('labloc'),
            'Section_Number' => $this->input->post('secno'),
            'Semester' => $this->input->post('semester'),
            'Topic' => $this->input->post('topic'),
            'Year' => $this->input->post('year'),
            'Time' => $this->input->post('time'),
        );

        var_dump($data);
        $insert = $this->lab_session_model->lab_sesson_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/professorrole/lab_session'));
    }


//    public function lab_session_update()
//    {
//        $data = array(
//            'Graduate_SID' => $this->input->post('gradsid'),
//            'Lab_Location' => $this->input->post('labloc'),
//            'Topic' => $this->input->post('topic'),
//            'Time' => $this->input->post('time'),
//        );
//        $this->lab_session_model->lab_session_update(array('Emp_ID' => $this->input->post('empid')), $data);
//        echo json_encode(array("status" => TRUE));
//        redirect(base_url('index.php/professorrole/lab_session'));
//
//    }

    public function lab_session_delete($id)
    {
        $this->lab_session_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/professorrole/lab_session'));
    }
}

