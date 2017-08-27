<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/26/2017
 * Time: 6:47 PM
 */
class Posts extends CI_Controller{
    public function index(){

            $data['title']='Latest Posts';
            $data['posts'] =$this->post_model->get_posts();
            //print_r($data['posts']);
            $this->load->view('template/header');
            $this->load->view('posts/index',$data);
            $this->load->view('template/footer');
    }
    //for read more link in index fil in posts
    public function view($slug = NULL){
        $data['post']=$this->post_model->get_posts($slug);
        if (empty($data['post'])){
            show_404();
        }
        $data['title']=$data['post']['title'];

        $this->load->view('template/header');
        $this->load->view('posts/view',$data);
        $this->load->view('template/footer');


    }
    public function create(){
        $data['title']='Create Post';

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        //if this statement became true then there is no any error with form
        if ($this->form_validation->run()===FALSE) {
            $this->load->view('template/header');
            $this->load->view('posts/create', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->post_model->create_post();
//            $this->load->view('posts/success');
            redirect('posts');
        }
    }
    public function delete($id){
        $this->post_model->delete_post($id);
        redirect('posts');
    }
    public function edit($slug){
        $data['post']=$this->post_model->get_posts($slug);
        if (empty($data['post'])){
            show_404();
        }
        $data['title']='Edit Post';

        $this->load->view('template/header');
        $this->load->view('posts/edit',$data);
        $this->load->view('template/footer');

    }
    public function update(){
        $this->post_model->update_post();
        redirect('posts');
    }
}