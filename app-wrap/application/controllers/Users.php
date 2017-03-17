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

    function regist(){
        //获取提交的表单内容，=>左边是数据表里面的键名，=>右边是通过name获取的表单值
        $arr = array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        );
        $this -> usermodel -> u_insert($arr);
    }


    function login(){
        $user = $this->usermodel->select_by_name($this->security->xss_clean($_POST['username']));
        //调用User_test模型的select_by_name方法查询提交的用户名的信息
        if ($user) { //若此用户存在
            if ($user[0]->password == $this->security->xss_clean($_POST['password'])) {
                // 如果提交的密码与正确密码一致，则创建session
                $arr = array(
                    's_id' => $user[0]->id,
                    's_username' => $user[0]->username
                );
                //设置session
                $this->session->set_userdata($arr);
                echo 'login successful!!!<br/>';
                redirect('manage');
            } else {
                echo 'password incorrect';
            }
        } else {
            echo 'username incorrect';
        }
    }

    function logout(){
        $this -> session -> unset_userdata('s_id');
        //删除此session
        redirect('users');
    }


}