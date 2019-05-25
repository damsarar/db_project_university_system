<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class professor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('professor_model');
        $this->load->model('get_department_list_model');


    }


    public function index()
    {
        //$this->load->view('admin/professor_view');
        $this->load->view('header');


        $data['groups'] = $this->get_department_list_model->getAllGroups();

        //load the database
        $this->load->database();
        //load the model
        //$this->load->model('professor_model');
        //load the method of model
        $data['h']=$this->professor_model->professor_select();
        //return the data in view
        $this->load->view('admin/professor_view', $data);
        //$this->load->view('edit_data_view', $data);
    }

    public function professor_add()
    {
        $data = array(
            'Emp_ID' => $this->input->post('empid'),
            'Name' => $this->input->post('name'),
            'office' => $this->input->post('office'),
            'phone' => $this->input->post('phone'),
            'purpose' => $this->input->post('purpose'),
            'Dept_code' => $this->input->post('deptcode'),
        );

        var_dump($data);
        $insert = $this->professor_model->professor_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/professor'));
    }


    public function professor_update()
    {
        $data = array(
            'Name' => $this->input->post('name'),
            'office' => $this->input->post('office'),
            'phone' => $this->input->post('phone'),
            'purpose' => $this->input->post('purpose'),
            'Dept_code' => $this->input->post('deptcode'),
        );
        $this->professor_model->professor_update(array('Emp_ID'=> $this->input->post('empid')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/professor'));

    }

    public function professor_delete($id)
    {
        $this->professor_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/professor'));
    }


}