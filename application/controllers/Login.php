<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 18/12/2017
 * Time: 09:53
 */

class Login extends CI_Controller {


    public function index()
    {
        $this->load->view('welcome_message');
    }
}
