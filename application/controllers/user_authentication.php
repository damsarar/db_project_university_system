<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_authentication extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_auth_model');

    }


    public function index()
    {
        $this->load->view('login_view');

    }

    public function cek_login()
    {
        $data = array('user_name' => $this->input->post('username') ,
            'password' => $this->input->post('password')
        );
        $hasil = $this->user_auth_model->cek_user($data);
        if ($hasil->num_rows() == 1){
            foreach($hasil->result() as $sess)
            {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['user_name'] = $sess->user_name;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='1'){
                redirect('<?php echo base_url(); ?>/index.php/admin');
            }
            elseif ($this->session->userdata('level')=='2'){
                redirect('member');
            }
            elseif ($this->session->userdata('level')=='3'){
                redirect('member');
            }
        }
        else
        {
            echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
        }

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('<?php echo base_url(); ?>/index.php/user_authentication');
    }

}