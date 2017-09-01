<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/28/2017
 * Time: 5:46 PM
 */
class Categories extends CI_Controller{
    public function index(){
        $data['title']='Categeroies';

        $data['categories']=$this->category_model->get_categories();

        $this->load->view('template/header');
        $this->load->view('categories/index',$data);
        $this->load->view('template/footer');

    }
    public function create(){
        //check login
        if (!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
        $data['title']='Create Category';
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run()=== FALSE){
            $this->load->view('template/header');
            $this->load->view('categories/create',$data);
            $this->load->view('template/footer');
        }
        else{
            $this->category_model->create_category();

            //set message
            $this->session->set_flashdata('category_created','Your category has been created.');


            redirect('categories');
        }
    }
    public function posts($id){
        $data['title'] = $this->category_model->get_category($id)->name;

        $data['posts']=$this->post_model->get_posts_by_category($id);

        $this->load->view('template/header');
        $this->load->view('posts/index',$data);
        $this->load->view('template/footer');



    }
    public function delete($id){
        //check login
        if (!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
        $this->category_model->delete_category($id);

        //set message
        $this->session->set_flashdata('category_deleted','Your category has been deleted');

        redirect('categories');
    }

}