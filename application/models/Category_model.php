<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/28/2017
 * Time: 6:22 PM
 */
class  Category_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function create_category(){
        $data = array(
            'name' => $this->input->post('name')
    );
        return $this->db->insert('categories',$data);
    }
}