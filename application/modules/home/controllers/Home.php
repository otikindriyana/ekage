<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 19/12/2017
 * Time: 11:00
 */
class Home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $header['pageTitle'] = "Login | E-kage";
        $this->basecontroller->loadviews('home', $header);
    }

    public function cekHarga()
    {
        $header['pageTitle'] = "Cek Harga | E-kage";
        $footer['menu'] = "cekHarga";
        if ($this->input->post('cari') != null) {
            $cari = $this->input->post('cari');
            $data['cari'] = $cari;
            $data['data_barang'] = $this->m_home->get_barang($cari);
            $this->basecontroller->loadviews('cekharga', $header, $data, $footer);
        }else{
            $this->basecontroller->loadviews('cekharga', $header, null, $footer);

        }
    }

    public function login()
    {
        $header['pageTitle'] = "Login Page | E-kage";
        $footer['menu'] = "login";
        $this->basecontroller->loadviews('login', $header, null, $footer);
    }

    public function logout()
    {
        $this->basecontroller->logout();
    }

    public function transaksi(){
      $header['pageTitle'] = "Transaksi Page | E-kage";
      $footer['menu'] = "Transaksi";
      $this->basecontroller->loadviews('transaksi',$header, null, $footer);
    }

}
