<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/28/2017
 * Time: 5:46 PM
 */
class Categories extends CI_Controller{
    public function index(){

    }
    public function create(){
        $data['title']='Create Category';
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run()=== FALSE){
            $this->load->view('template/header');
            $this->load->view('categories/create',$data);
            $this->load->view('template/footer');
        }
        else{
            $this->category_model->create_category();
            redirect('categories');
        }
    }
}