<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class department extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model');
        $this->load->model('get_professor_list_model');

    }


    public function index()
    {

        $this->load->view('header');

        //load the database
        $this->load->database();
        //load the model
        //load the method of model
        $data['d']=$this->department_model->department_select();
        $data['groups'] = $this->get_professor_list_model->getAllGroups();

        //return the data in view
        $this->load->view('admin/department_view', $data);

    }

    public function department_add()
    {
        $data = array(
            'Emp_id' => $this->input->post('empid'),
            'Name' => $this->input->post('name'),
            'Location' => $this->input->post('location'),
            'phone' => $this->input->post('phone'),
            'Dept_code' => $this->input->post('deptcode'),
        );

        var_dump($data);
        $insert = $this->department_model->department_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/department'));
    }

//    public function ajax_edit($id)
//    {
//        $data = $this->professor_model->get_by_id($id);
//        echo json_encode($data);
//    }

    public function department_update()
    {
        $data = array(
            //'Dept_code' => $this->input->post('deptcode'),
            'Emp_id' => $this->input->post('empid'),
            'Name' => $this->input->post('name'),
            'Location' => $this->input->post('location'),
            'phone' => $this->input->post('phone'),

        );
        $this->department_model->department_update(array('Dept_code'=> $this->input->post('deptcode')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/department'));

    }

    public function department_delete($id)
    {
        $this->department_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/department'));
    }


}