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

    function loadNews()
    {
        $limit = 20;////每个页面中希望展示的数量
        $current_page = 1;//当前页
        if(!empty($this -> uri -> segment(3)))
        {
            if(($this -> uri -> segment(3)) > ($this->db->count_all('archives')/$limit))
            {  //防uri乱输，如果大于可出的页面则跳回第一页
                $current_page = 1;
            }else {
                $current_page = $this->uri->segment(3);
            }
        }

        $offset = ($current_page - 1) * $limit;
        $result = $this -> managemodel -> article_list($limit, $offset);
        $data['posts'] = $result;

        $this->load->library('pagination');

        //这是一个指向你的分页所在的控制器类/方法的完整的 URL
        $config['base_url'] = base_url().'/index.php/home/loadnews';
        $config['per_page'] = $limit;
        $config['total_rows']= $this->db->count_all('archives');//需要展示的总行数
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config ['next_link'] = '&laquo;';//下一页链接
        $config ['prev_link'] = '&raquo;';//上一页链接
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        //$data['posts'] = $this -> managemodel -> getList();//获得文章列表
        $data['page'] = $this->pagination->create_links();
        $this->load->view('v-company-font-view/v-company-news', $data);

    }

    function loadNewsContent(){
        $id = $this -> uri -> segment(3);//获得文章编号
        $data['post'] = $this -> managemodel -> getById($id);//查询文章内容
        $this -> load ->view('v-company-font-view/v-company-news-content', $data);
    }


}