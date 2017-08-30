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
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
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
}
?>