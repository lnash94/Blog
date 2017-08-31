<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/30/2017
 * Time: 9:45 AM
 */
class  Users extends CI_Controller{
    public function register(){
        $data['title'] ='Sign Up';
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
        $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','ConfirmPassword','matches[password]');

        if ($this->form_validation->run()=== FALSE){
            $this->load->view('template/header');
            $this->load->view('users/register',$data);
            $this->load->view('template/footer');
        }
        else{
            //die('Continue');
            //Encrypte password
            $enc_password = md5($this->input->post('password'));
            $this->user_model->register($enc_password);

            //set message
            $this->session->set_flashdata('user_registered','You are now registered and can log in');

            redirect('posts');
        }
    }

    // Check if username exists
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if($this->user_model->check_username_exists($username)){
            return true;
        } else {
            return false;
        }
    }
    //check if email exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','That email  is taken.Please choose a different one');
        if ($this->user_model->check_email_exists($email)){
            return true;
        }
        else{
            return false;
        }
    }
}
?>