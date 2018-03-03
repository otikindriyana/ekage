<?php
/**
 * Created by PhpStorm.
 * User: Tri Hutama
 * Date: 22/01/2018
 * Time: 08:13
 */

class M_transaksi extends CI_Model
{
    function get_barang($search = null)
    {
        $this->db->select('*');
        $this->db->from('mst_barang b');
        $this->db->join('mst_kategori k', 'b.id_kategori=k.id_kategori');
        $this->db->where('b.status', '1');
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('b.kode_barang', $search);
            $this->db->or_like('b.nm_barang', $search);
            $this->db->group_end();

        }

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function edit_barang($search = 0)
    {
        $this->db->select('*');
        $this->db->from('mst_barang b');
        $this->db->join('mst_kategori k', 'b.id_kategori=k.id_kategori');

        if ($search != 0) {
            $this->db->where('b.id_barang', $search);
        }
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function update_data_barang($id_barang, $data)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('mst_barang', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function tambah_barang($data)
    {
        $this->db->insert('mst_barang', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function cek_duplikasi($kode_barang)
    {
        $this->db->select('*');
        $this->db->from('mst_barang b');
        $this->db->where('b.kode_barang', $kode_barang);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function hapus_barang($id_barang)
    {
        $this->db->set('status','0');
        $this->db->where('id_barang', $id_barang);
        $this->db->update('mst_barang');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_kategori()
    {
        $this->db->select('*');
        $this->db->from('mst_kategori k');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
