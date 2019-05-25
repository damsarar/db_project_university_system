<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginpage extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');

    }


    public function index()
    {
        $this->load->view('login_page_view');
        $this->load->view('header');
    }


//    public function checkUser(){
//        $data = array(
//            'user_name' => $this->input->post('username'),
//            'password' => $this->input->post('password'),
//
//        );
//
//        //$data['h']=$this->login_model->checkUser($data);
//        $data['users']= $this->login_model->checkUser(array('user_name'=> $this->input->post('username')));
//        var_dump($data['users']);
//
//
////        if (mysqli_num_rows($data) > 0) {
////            // output data of each row
////
////            while($row = mysqli_fetch_assoc($data['h'])) {
////                if($user == $row['level'] && $password == $row ['password']){
////                    // echo "Testinggggggggggggggggggggggggggggggggggg";
////                    switch ($user) {
////                        case "student":
////                            header('Location: ');
////                            break;
////                        case "admin":
////                            header('Location:http://localhost/ProjectDB/admin.php');
////                            break;
////                        case "professor":
////                            header('Location: ');
////                            break;
////                        default:
////                            break;
////                    }
////
////
////                }
////            }
////        } else {
////
////            echo "0 results";
////
////        }
//
//
//    }



}