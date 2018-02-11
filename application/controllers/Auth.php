<?php

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login() 
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->user_model->checklogin($username,$password);
        if($result->num_rows() > 0){
            redirect('/user/profile');
        }else{
            //fail logged in
            redirect('/');
        }
    }
    

}