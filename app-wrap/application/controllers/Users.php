<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    // Form validation library and user model is loaded.
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('usermodel');
    }

    function index(){
        $this->load->view('users/login');
        //echo 'Hello World!';
    }

    public function manage()
    {
        $id = null;
        $id = $this->session->userdata('s_id');
        if ($id) {
            $user = $this->usermodel->select_by_id($id);
            $data = array(
                'title' => '管理界面',
                'name' => $user[0]->username
            );
            $this->load->view('users/manage', $data);
        } else {
            redirect('users/login');
        }
    }

    function regist(){
        //获取提交的表单内容，=>左边是数据表里面的键名，=>右边是通过name获取的表单值
        $arr = array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        );
        $this -> usermodel -> u_insert($arr);
    }

    function login(){
        $user = $this->usermodel->select_by_name($_POST['username']);
        //调用User_test模型的select_by_name方法查询提交的用户名的信息
        if ($user) { //若此用户存在
            if ($user[0]->password == $_POST['password']) {
                // 如果提交的密码与正确密码一致，则创建session
                $arr = array('s_id' => $user[0]->id,);
                //设置session
                $this->session->set_userdata($arr);
                echo 'login successful!!!<br/>';
                redirect('users/manage/');
            }
            else {
                echo 'password incorrect';
            }
        }
        else {
            echo 'username incorrect';
        }
    }

    function is_login(){
        if($this -> session -> userdata('s_id')){
            //如果能获得s_id则表示出于登录状态
            echo 'log in successful!!!';
            return true;
        }else{
            echo 'please login!!!';
            return false;
        }
    }

    function logout(){
        $this -> session -> unset_userdata('s_id');
        //删除此session
        $this->load->view('users/login');
    }
}