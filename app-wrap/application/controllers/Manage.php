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
            redirect('manage/loadmanage');
        } else {
            redirect('users');
        }
    }

    function loadManage()
    {
        $limit = 20;////每个页面中希望展示的数量
        $current_page = 1;//当前页
        if(!empty($this -> uri -> segment(3))){
            if(($this -> uri -> segment(3)) > ($this->db->count_all('archives')/$limit))
            { //防uri乱输，如果大于则
                $current_page = 1;
            }else {
                $current_page = $this->uri->segment(3);
            }
        }
        $offset = ($current_page - 1) * $limit;
        $result = $this -> managemodel -> article_list($limit, $offset);
        $data['posts'] = $result;

        $this->load->library('pagination');
        $config['base_url'] = base_url().'/index.php/manage/loadmanage';
        $config['per_page'] = $limit;
        $config['total_rows']= $this->db->count_all('archives');//需要展示的总行数
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config ['next_link'] = '&laquo;';//下一页链接
        $config ['prev_link'] = '&raquo;';//上一页链接
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);

        $data['page'] = $this->pagination->create_links();
        $this->load->view('manage', $data);
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