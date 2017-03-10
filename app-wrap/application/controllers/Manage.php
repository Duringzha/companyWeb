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
        if ($this->session->userdata('s_id')) {
            //若已登录
            $data['posts'] = $this -> managemodel -> getList();
            $this->load->view('manage', $data);
        } else {
            redirect('users/login');
        }
    }

    function loadManagePage(){
        $data = $this -> managemodel -> getList();

    }

    function loadNewPost(){
        $this -> load -> view('new');
    }

    function newPost(){
        $data = array(
            'title'=> $this->security->xss_clean($_POST['title']),
            'author'=> $this->security->xss_clean($_POST['author']),
            'image'=> $this->security->xss_clean($_POST['image']),
            'content'=> $this->security->xss_clean($_POST['content'])
        );
    }


}