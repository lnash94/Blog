<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/26/2017
 * Time: 7:08 PM
 */
class Post_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    //getting post from here
    public function get_posts($slug=FALSE){
        if($slug===FALSE){
            $this->db->order_by('id','DESC');
            $query =$this->db->get('posts');
            return $query->result_array();
        }
        $query =$this->db->get_where('posts',array('slug'=>$slug));
        return $query->row_array();


    }
    //submit post or create post
    public function create_post(){
        $slug =url_title($this->input->post('title'));
        $data =array(
            'title'=>$this->input->post('title'),
            'slug'=>$slug,
            'body'=>$this->input->post('body')
        );
        return $this->db->insert('posts',$data);    //insert(tablename,dataset)
    }
    //Delete Post
    public function delete_post($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
        return true;
    }

    //update post
    public function update_post(){
        $slug =url_title($this->input->post('title'));

        $data =array(
            'title'=>$this->input->post('title'),
            'slug'=>$slug,
            'body'=>$this->input->post('body')
        );
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }
}
