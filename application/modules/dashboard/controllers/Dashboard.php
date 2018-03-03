<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 19/12/2017
 * Time: 11:00
 */

class Dashboard extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->basecontroller->isLoggedIn();
    }

    public function index()
    {
        $header['pageTitle'] = 'Dashboard | E-kage';
        $this->basecontroller->loadviews('dashboard',$header);
    }
}