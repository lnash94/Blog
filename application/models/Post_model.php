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
            $query =$this->db->get('posts');
            return $query->result_array();
        }
        $query =$this->db->get_where('posts',array('slug'=>$slug));
        return $query->row_array();


    }
}
