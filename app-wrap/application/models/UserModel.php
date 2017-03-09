<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this -> userTbl = 'users';
    }

    function u_insert($arr)//增
    {
        $this -> db -> insert('users', $arr);//把传来的数据组查到users表里
    }

    function u_del($id)//删
    {
        $this -> db -> where('id', $id);//查找到此id的用户信息
        $this -> db -> delete('users');//删除此id所有信息
    }

    function u_update($id, $arr)//改
    {
        $this -> db -> where('id', $id);//查找到此id的用户信息
        $this -> db -> update('users', $arr);//更新
    }

    function select_by_name($name)//用username查
    {
        $this -> db -> where('username', $name);
        $this -> db -> select('*'); //选取全部信息
        $query = $this -> db -> get('users');
        return $query -> result();//返回值
    }

    function select_by_id($id)//用id查
    {
        $this -> db -> where('id', $id);
        $this -> db -> select('*'); //选取全部信息
        $query = $this -> db -> get('users');
        return $query -> result();//返回值
    }



    /*
    * Insert user information
    *
    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }

        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);

        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
    */
}