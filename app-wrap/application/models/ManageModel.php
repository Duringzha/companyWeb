<?php

/**
 * Author: Miiog
 * Date: 2017/3/10
 * Time: 12:32
 */
class ManageModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAll(){
        //获得所有文章列表
        $query = $this->db->get('archives');
        return $query -> result();
    }

    public function getById($id){
        //按标题获得文章
        $query = $this -> db -> get_where('archives', array('id' => $id));
        return $query ->row();
    }
    public function insert($data){
        //$post为关联数组或对象
        return $this -> db -> insert('archives',$data);
    }
    public function upadte($id,$data){
        /* 更新帖子
         * $data = array(
         * 'title' => $title
         * 'author' => $author
         * 'content' => $content
         * 'image' => $image)
         */
        $this -> db -> where('id',$id);
        return $this -> db -> update('archives',$data);
    }

    public function deleteById($id){
        //删除文章
        $this -> db -> where('id',$id);
        return $this -> db -> delete('archives');
    }

    public function getList(){
        //获得文章列表
        $query = $this -> db -> query('select * from archives');
        return $query -> result();
    }


}