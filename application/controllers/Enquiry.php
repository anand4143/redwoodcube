<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('enquirys');
         $this->load->model('users');
         $this->load->model('pages');
        // Session
        $this->load->library('session');
	
    }

    
	
	public function index()
	{
        $res['pages'] = $this->pages->getPagesMetas('enquery');
		$this->load->view('enquiry',$res);
    }
    
    public function saveEnquiry(){    
        $res['pages'] = $this->pages->getPagesMetas('enquery');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
		$this->form_validation->set_rules('phone', 'Phone no', 'required|trim');
		//$this->form_validation->set_rules('budget', 'Bugdet', 'required|trim');		
        $this->form_validation->set_rules('enquirytext', 'Enquiry Text', 'required');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
        
        if($this->form_validation->run()) {
            //echo "<pre>";print_r($this->input->post());
            $data = array(
                "name"        => $this->input->post('name'),
                "email"       => $this->input->post('email'),
                "phone"       => $this->input->post('phone'),
                //"budget"      => $this->input->post('budget'),
                "enquirytext" => $this->input->post('enquirytext')
            );
            //echo "<pre>";print_r($data);die('hhhhhh');
            $result = $this->enquirys->saveEnquiry($data);
            if($result) {
                $this->session->set_flashdata('Success',"We will get back to you asap");
                
				redirect('enquiry');
			} else {
				$this->session->set_flashdata('Error',"Something went wrong. Please try later");
				redirect('enquiry');
			}
        }else {
			
           $this->load->view('enquiry',$res);
            //redirect('enquiry');
		}

    }
}
