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
            'image'=> $this->security->xss_clean($_POST['image']),
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
            'image'=> $this->security->xss_clean($_POST['image']),
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

    function uploadImage(){
        $type = $this -> uri -> segment(3);
        if( ($type != 111) && ($type != 222)){
            redirect('manage');
        }else {


            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '102400';
            $config['max_width'] = '2048';
            $config['max_height'] = '2048';
            $config['file_name'] = date('ymdHis');//以时间戳为名

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                //上传成功
                $upload = $this->upload->data();
                $file_name = $upload['file_name'];//获得文件名
                $data = array(
                    'image_name' => $file_name,
                    'username' => $this->session->userdata('s_username')
                );
                //var_dump($data);//打印文件信息

            } else {
                $data = array(
                    'username' => $this->session->userdata('s_username'),
                    'error' => $this->upload->display_errors(),
                    'image_name' => ''
                );
                //var_dump($error);
            }
            if ($type == 111) {
                $this->load->view('new', $data);
            } elseif ($type == 222) {
                $id = $this -> uri -> segment(4);
                $data['post'] = $this -> managemodel -> getById($id);
                $this->load->view('post', $data);
            }
        }
    }


}