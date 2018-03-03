<?php
/**
 * Created by PhpStorm.
 * User: trihut
 * Date: 27/12/2017
 * Time: 14:55
 */

class Login_model extends CI_Model
{
    function loginMe($username,$password){
        $this->db->select('id_user,username,password,role_name,status');
        $this->db->from('mst_user');
        $this->db->join('mst_roles','roles = id_role');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();

        $user = $query->result();

//        if( !empty($user)){
//            if (verifyHashedPassword($password, $user[0]->password)){
//                return user;
//            }else{
//                return array();
//
//            }
//        }else{
//            return array();
//        }
        if( !empty($user)){

                return $user;

        }else{
            return array();
        }

    }

}