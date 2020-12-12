<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesDetail extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('users');
        $this->load->model('pages');
        // Session
		$this->load->library('session');
		
		
		
    }
	
	public function index()
	{
		$data['currentClass'] = $this->getCurrentURL();
		$this->load->view('services/all',$data);
	}

	public function detail(){
		$data['currentClass'] = $this->getCurrentURL();
		// echo "<pre>";print_r($data);
		$serviceType = $this->uri->segment(3);
	
		if($serviceType == "dataanalysis"){
			$this->load->view('services/'.$serviceType,$data);
		}else if($serviceType == "webdevelopment"){
			$this->load->view('services/'.$serviceType,$data);		
		}else if($serviceType == "businessdevelopment"){
			$this->load->view('services/'.$serviceType,$data);		
		}else if($serviceType == "digitalmarketing"){
			$this->load->view('services/'.$serviceType,$data);
		}
		
	}
}
