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

}