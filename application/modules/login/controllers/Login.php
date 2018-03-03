<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 19/12/2017
 * Time: 11:00
 */

class Login extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->isLoggedIn();

    }

    public function isLoggedIn(){
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        if (!isset($isLoggedIn)|| $isLoggedIn !=TRUE){
            $header['pageTitle'] = "Login | E-kage";
            $footer['menu'] = "login";
            $this->basecontroller->loadviews('Login',$header,null,$footer);
        }
        else{
            redirect('/dashboard');
        }
    }
    public function loginMe()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE)
        {
//            $this->index();
            echo json_encode();
        }
        else
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $result = $this->login_model->loginMe($username, $password);

            if(count($result) > 0)
            {
                foreach ($result as $res)
                {
                    $sessionArray = array('userId'=>$res->id_user,
                        'username'=>$res->username,
                        'role'=>$res->role_name,
                        'isLoggedIn' => TRUE
                    );

                    $this->session->set_userdata($sessionArray);

                    echo json_encode('{"status":200,"message":"Success"}');
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'Username or password mismatch');

            }
        }
    }
}