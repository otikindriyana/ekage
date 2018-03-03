<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 19/12/2017
 * Time: 11:00
 */
class Histori extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->basecontroller->isLoggedIn();
        $this->load->model('m_transaksi');
    }

    public function index()
    {

        $header['pageTitle'] = 'Histori Transaksi | E-kage';
        // if ($this->input->post('searchText') != null) {
        //     $cari = $this->input->post('searchText');
        //     $data['searchText'] = $cari;
        //     $data['data_barang'] = $this->m_barang->get_barang($cari);
        // } else {
        //     $data['data_barang'] = $this->m_barang->get_barang();
        //
        // }
        $this->basecontroller->loadviews('Histori_Transaksi', $header);
    }

    public function tambah_barang()
    {
        $header['pageTitle'] = 'Tambah barang | E-kage';
        $data['kategori'] = $this->m_barang->get_kategori();

        $this->basecontroller->loadviews('tambah_barang', $header, $data);

    }

    public function insert_barang()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('harga_beli', 'nama_barang', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'harga_jual', 'required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');


        if ($this->form_validation->run() == FALSE) {
//            $this->index();
            echo json_encode();
        } else {
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $harga_beli = $this->input->post('harga_beli');
            $harga_jual = $this->input->post('harga_jual');
            $stok = $this->input->post('stok');
            $kategori = $this->input->post('kategori');

            $barang = array(
                'kode_barang' => $kode_barang,
                'nm_barang' => $nama_barang,
                'harga_beli' => $harga_beli,
                'harga_jual' => $harga_jual,
                'stok' => $stok,
                'id_kategori' => $kategori,
                'status' => '1'
            );

            if ($this->m_barang->cek_duplikasi($kode_barang)) {
                $json = array(
                    "status" => "200",
                    "message" => "Duplicate"
                );
                echo json_encode($json);
            } else {
                $result = $this->m_barang->tambah_barang($barang);
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

    public function edit_barang($id_barang)
    {
        $header['pageTitle'] = 'Edit Barang | E-kage';
        $data['data_barang'] = $this->m_barang->edit_barang($id_barang);
        $data['kategori'] = $this->m_barang->get_kategori();
        $this->basecontroller->loadviews('edit_barang', $header, $data);

    }

    public function update_data_barang()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('harga_beli', 'nama_barang', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'harga_jual', 'required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');


        if ($this->form_validation->run() == FALSE) {

        } else {
            $id_barang = $this->input->post('id_barang');
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $harga_beli = $this->input->post('harga_beli');
            $harga_jual = $this->input->post('harga_jual');
            $stok = $this->input->post('stok');
            $kategori = $this->input->post('kategori');
            $barang = array(
                'kode_barang' => $kode_barang,
                'nm_barang' => $nama_barang,
                'harga_beli' => $harga_beli,
                'harga_jual' => $harga_jual,
                'stok' => $stok,
                'id_kategori' => $kategori,
                'status' => '1'
            );
            $result = $this->m_barang->update_data_barang($id_barang, $barang);
            if ($result) {
                $json = array(
                    "status" => "200",
                    "message" => "Success"
                );
                echo json_encode($json);
            }
        }
    }

    public function hapus_barang()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        if ($this->form_validation->run() == FALSE) {

        } else {
            $id_barang = $this->input->post('id_barang');
            $hapus = $this->m_barang->hapus_barang($id_barang);
            if ($hapus) {
                $json = array(
                    "status" => "200",
                    "message" => "Success"
                );
                echo json_encode($json);
            }
        }
    }

}
