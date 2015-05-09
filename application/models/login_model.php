<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author Momena
 */
class Login_Model extends CI_Model {
    public function save_user_info($data){
        $this->db->insert('tbl_user',$data);
        return TRUE;
    }
    public function check_login_info($email,$password){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $qurey_result=$this->db->get();
        $result=$qurey_result->row();
        return $result;
    }
}

?>
