<?php

class User_model extends CI_Model
{
    /*public function __construct()
    {
        $this->load->database();
    }*/

    public function register($enc_password)
    {
        //user data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $enc_password

        );
        //insert data
        return $this->db->insert('users', $data);
    }

    // Check username exists
    public function check_username_exists($username){
        $query = $this->db->get_where('users', array('username' => $username));
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }
    //check email exist
    public function check_email_exists($email)
    {
        $query = $this->db->get_where('users',array(
            'email'=>$email));
        if (empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
}