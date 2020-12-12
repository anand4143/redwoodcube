<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('users');
        // Session
        $this->load->library('session');
		$this->auth();
    }

    public function index() {
        //echo "asdfsdfsdf";die;
        //$data = array();
        $rs['data'] = $this->users->getAllPages();
      //echo "<pre>"; print_r($rs);die('dashboard page anand');

    $this->load->view('admin/dashboard/index',$rs);
	}
	
	public function contactus(){
		$rs['data'] = $this->users->getAllcontact();
		$this->load->view('admin/dashboard/contactus',$rs);
	}
    
    public function create(){
        $this->load->view('admin/dashboard/create');
    }

    public function save(){
        echo "<pre>";print_r($this->input->post());
        $Data = array(
            'title'     => $this->input->post('title'),
            'keywords'     => $this->input->post('keywords'),
            'description'     => $this->input->post('description'),
            'author'     => $this->input->post('author'),
            'robots'     => $this->input->post('robots'),
            'ogtitle'     => $this->input->post('ogtitle'),
            'ogdescription'     => $this->input->post('ogdescription'),
            'ogimage'     => $this->input->post('ogimage'),
        );    
        $result = $this->users->save($Data);    
        echo "<li>".$result;
        if($result){
            $this->session->set_flashdata('success',"Data enserted successfully");
           
        }else{
            $this->session->set_flashdata('error',"Something went wrong.Please try later");
           
        }
        redirect('dashboard/create');
    }
	
    
}
