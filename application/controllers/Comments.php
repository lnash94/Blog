<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/30/2017
 * Time: 6:28 AM
 */
class Comments extends CI_Controller{
    public function create($post_id){
        $slug = $this->input->post('slug');
        $data['post']= $this->post_model->get_posts($slug);

        //form validation
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('body','Comment','required');

        if ($this->form_validation->run()===FALSE){
            $this->load->view('template/header');
            $this->load->view('posts/view',$data);
            $this->load->view('template/footer');
        }
        else{
            $this->comment_model->create_comment($post_id);
            redirect('posts/'.$slug);
        }
    }
}