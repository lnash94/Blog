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
    /*public  function create_category(){
        $data = array(
            'name'=>$this->input->post('name')
        );
        return $this->db->insert('categories',$data);
    }*/
    /*public function get_category($id){
        $query = $this->db->get_where('categories',array('id'=>$id));
        return $query
    }*/
    public function posts($id){
        $data['title'] = $this->category_model->get_category($id)->name;

        $data['posts']=$this->post_model->get_posts_by_category($id);

        $this->load->view('template/header');
        $this->load->view('posts/index',$data);
        $this->load->view('template/footer');



    }

}