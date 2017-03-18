<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('managemodel');
    }
    function index(){
        $data['posts'] = $this -> managemodel -> getList();
        $this->load->view('v-company-font-view/v-company-index', $data);
    }

    function loadContact(){
        $this->load->view('v-company-font-view/v-company-contact');
    }

    function loadFactory(){
        $this->load->view('v-company-font-view/v-company-factory');
    }

    function loadIntroduce(){
        $data['introduce'] = $this -> managemodel -> getInfo();
        $this->load->view('v-company-font-view/v-company-introduce',$data);
    }

    function loadNews(){
        $data['posts'] = $this -> managemodel -> getList();//获得文章列表
        $this->load->view('v-company-font-view/v-company-news', $data);
    }

    function loadNewsContent(){
        $id = $this -> uri -> segment(3);//获得文章编号
        $data['post'] = $this -> managemodel -> getById($id);//查询文章内容
        $this -> load ->view('v-company-font-view/v-company-news-content', $data);
    }

}