<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class book extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model');

    }


    public function index()
    {
        $this->load->view('header');
        $this->load->database();
        $data['h']=$this->book_model->book_select();
        $this->load->view('admin/book_view', $data);

    }

    public function book_add()
    {
        $data = array(
            'ISBN' => $this->input->post('isbn'),
            'Name' => $this->input->post('name'),
            'Title' => $this->input->post('title'),
            'Author' => $this->input->post('author'),
            'Emp_Id' => $this->input->post('empid'),
            'Publisher' => $this->input->post('publisher'),
            'Year' => $this->input->post('year'),
        );

        var_dump($data);
        $insert = $this->book_model->book_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/book'));
    }


    public function book_update()
    {
        $data = array(
            'Name' => $this->input->post('name'),
            'Title' => $this->input->post('title'),
            'Author' => $this->input->post('author'),
            'Emp_Id' => $this->input->post('empid'),
            'Publisher' => $this->input->post('publisher'),
            'Year' => $this->input->post('year'),
        );
        $this->book_model->book_update(array('ISBN'=> $this->input->post('isbn')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/book'));

    }

    public function book_delete($id)
    {
        $this->book_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/admind/book'));
    }


}