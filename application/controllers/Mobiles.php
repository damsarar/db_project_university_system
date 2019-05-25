<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This is the Controller for codeigniter crud using ajax application.
class Mobiles extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mobile');
    }
    public function index()
    {
        $data['mobiles']=$this->mobile->get_all_mobiles();
        $this->load->view('users/header');
        $this->load->view('users/mobiles',$data);
        $this->load->view('users/footer');
    }
    public function mobile_add()
    {
        $data = array(
            'model_no' => $this->input->post('model_no'),
            'mobile_name' => $this->input->post('mobile_name'),
            'company' => $this->input->post('company'),
            'mobile_category' => $this->input->post('mobile_category'),
        );
        $insert = $this->mobile->mobile_add($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id)
    {
        $data = $this->mobile->get_by_id($id);
        echo json_encode($data);
    }

    public function mobile_update()
    {
        $data = array(
            'model_no' => $this->input->post('model_no'),
            'mobile_name' => $this->input->post('mobile_name'),
            'company' => $this->input->post('company'),
            'mobile_category' => $this->input->post('mobile_category'),
        );
        $this->mobile->mobile_update(array('id' => $this->input->post('mobile_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function mobile_delete($id)
    {
        $this->mobile->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }



}