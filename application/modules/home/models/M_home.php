<?php
/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 27/12/2017
 * Time: 14:55
 */

class M_home extends CI_Model
{
    function loginMe($username,$password){
        $this->db->select('id_user,username,password,roles,status');
        $this->db->from('mst_user');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();

        $user = $query->result();

        if( !empty($user)){
            if (verifyHashedPassword($password, $user[0]->password)){
                return user;
            }else{
                return array();

            }
        }else{
            return array();
        }

    }

    function get_barang($search){
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

}