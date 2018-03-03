<?php
/**
 * Created by PhpStorm.
 * User: Tri Hutama
 * Date: 20/01/2018
 * Time: 13:49
 */

class M_user extends CI_Model
{
    function update_password($id_user,$password)
    {
            $this->db->set('password',$password);
            $this->db->where('id_user',$id_user);
            $this->db->update('mst_user');
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }


    }

    function cek_password_lama($id_user, $password_lama){

        $this->db->select('*');
        $this->db->from('mst_user u');
        $this->db->where('u.id_user', $id_user);
        $this->db->where('u.password', $password_lama);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}