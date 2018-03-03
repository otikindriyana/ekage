<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 19/12/2017
 * Time: 11:00
 */

class USer extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->basecontroller->isLoggedIn();
        $this->load->model('m_user');
    }

    public function index()
    {

        $header['pageTitle'] = 'Ubah Password | E-kage';

        $data['data_barang'] = $this->m_barang->get_barang($cari);
        $this->basecontroller->loadviews('Barang', $header, $data);
    }

    public function ubah_password(){
        $header['pageTitle'] = 'Ubah Password | E-kage';
        $this->basecontroller->loadviews('ubah_password', $header);

    }

    public function change_pass(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('idUser', 'idUser', 'required');
        $this->form_validation->set_rules('passwordLama', 'passwordLama', 'required');
        $this->form_validation->set_rules('passwordBaru', 'passwordBaru', 'required');
        $this->form_validation->set_rules('cpasswordBaru', 'cpasswordBaru', 'required');

        if ($this->form_validation->run() == FALSE) {

        } else {
            $id_user = $this->input->post('idUser');
            $password_lama = md5($this->input->post('passwordLama'));
            $password_baru = md5($this->input->post('passwordBaru'));
            $check = array(
                'id_user' => $id_user,
                'password' => $password_lama
            );
            if(!$this->m_user->cek_password_lama($id_user, $password_lama)){
                $json = array(
                    "status" => "200",
                    "message" => "Failed"

                );
                echo json_encode($json);
            }else{
                $result = $this->m_user->update_password($id_user, $password_baru);
                if ($result) {
                    $json = array(
                        "status" => "200",
                        "message" => "Success"
                    );
                    echo json_encode($json);
                }
            }

        }
    }

}