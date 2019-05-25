<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class graduate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('graduate_model');

    }


    public function index()
    {
        //$this->load->view('admin/graduate_view');
        $this->load->view('header');

        //load the database
        $this->load->database();
        //load the model
        //$this->load->model('graduate_model');
        //load the method of model
        $data['h']=$this->graduate_model->graduate_select();
        //return the data in view
        $this->load->view('admin/graduate_view', $data);
        //$this->load->view('edit_data_view', $data);
    }

    public function graduate_add()
    {
        $data = array(
            'SID' => $this->input->post('sid'),
            'Name' => $this->input->post('name'),
            'Address' => $this->input->post('address'),
            'Status' => $this->input->post('status'),
            'Thesis_Option' => $this->input->post('thesisoption'),
            'Undergraduate_Major' => $this->input->post('umajor'),
        );

        var_dump($data);
        $insert = $this->graduate_model->graduate_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/graduate'));
    }


    public function graduate_update()
    {
        $data = array(
            'Name' => $this->input->post('name'),
            'Address' => $this->input->post('address'),
            'Status' => $this->input->post('status'),
            'Thesis_Option' => $this->input->post('thesisoption'),
            'Undergraduate_Major' => $this->input->post('umajor'),
        );
        $this->graduate_model->graduate_update(array('SID'=> $this->input->post('sid')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/graduate'));

    }

    public function graduate_delete($id)
    {
        $this->graduate_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/graduate'));
    }


}