<?php
/**
 * Author: Miiog
 * Date: 2017/3/10
 * Time: 12:31
 */
class Manage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('managemodel');
    }
    function index(){
        //验证登录
        if ($this->session->userdata('s_id')) {
            //若已登录
            $data['posts'] = $this -> managemodel -> getList();
            $this->load->view('manage', $data);
        } else {
            redirect('users/login');
        }
    }

    function loadNewPost(){
        //载入发布新文章页

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $data = array(
            'username' => $this->session->userdata('s_username')
        );
        $this -> load -> view('new',$data);
    }



    function newPost(){
        //发布新文章

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $data = array(
            'title'=> $this->security->xss_clean($_POST['title']),
            'author'=> $this->security->xss_clean($_POST['author']),
            'content'=> $this->security->xss_clean($_POST['content']),
            'created' => date('Y-m-d')//创建日期
        );
        if( $this -> managemodel -> insertArticle($data) ){
            //如果插入成功
            redirect( 'manage');
        }
        else{
            alert('插入失败');
            redirect( 'manage');
        }
    }

    function loadPost(){
        //进入编辑文章页

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $id = $this->input->get('id');//获得文章编号
        $data['post'] = $this -> managemodel -> getById($id);//查找文章数据
        $this -> load ->view('post', $data);//载入编辑视图
    }

    function updatePost(){
        //更新文章

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $data = array(
            'id' => $this->input->get('id'),//获得文章编号
            'title'=> $this->security->xss_clean($_POST['title']),
            'author'=> $this->security->xss_clean($_POST['author']),
            'content'=> $this->security->xss_clean($_POST['content']),
            'modified' => date('Y-m-d H:s:u')//更新日期
        );

        if( $this -> managemodel -> upadte($data) ){
            //如果插入成功
            redirect( 'manage');
        }
        else{
            alert('插入失败');
            redirect( 'manage');
        }
    }

    function deletePost(){
        $id = $this -> uri -> segment(3);
        $this -> managemodel -> deleteById($id);
        if( $this -> db -> affected_rows() > 0 ) {
            //删除成功，直接回到管理页面
            redirect('manage');
        }else{
            alert('删除失败');
            redirect( 'manage');
        }
    }

    function loadInfo(){
        //进入编辑公司简介页

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $data['introduction'] = $this -> managemodel -> getInfo();//查找公司简介
        $this -> load ->view('introduction', $data);//载入编辑视图
    }

    function updateInfo(){
        //更新公司简介

        if (!$this->session->userdata('s_id')){
            redirect('users/login');
        }

        $data['info'] = $this->security->xss_clean($_POST['information']);

        if( $this -> managemodel -> updateInfo($data) ){
            //如果插入成功
            redirect( 'manage');
        }
        else{
            alert('插入失败');
            redirect( 'manage');
        }
    }



}