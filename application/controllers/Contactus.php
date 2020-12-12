<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends MY_Controller {
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
		// if(current_url() == $this->config->item('base_url')){
        //     if(!empty($this->session->userdata("msg"))){
        //         $this->session->unset_userdata('msg');
                
        //     }
        //     if(!empty($this->session->userdata("username"))){
        //         $this->session->unset_userdata('username');
        //     }
        //     if(!empty($this->session->userdata("email"))){
        //         $this->session->unset_userdata('email');
        //     }
        //     if(!empty($this->session->userdata("mobileno"))){
        //         $this->session->unset_userdata('mobileno');
        //     }
        //     if(!empty($this->session->userdata("msgquickRequest"))){
        //         $this->session->unset_userdata('msgquickRequest');
        //     }
        // }
		//echo "<pre>";print_r($this->input->post());
		//echo "<li>".$this->router->fetch_class();die;
		$currentClass = $this->input->post('currentClass');
		// if(!empty($this->session->userdata("msg"))){
		// 	$this->session->unset_userdata('msg');
		// }
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User name','required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
		$this->form_validation->set_rules('mobileno', 'Mobile no','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if($this->form_validation->run()) {   
		    $uname  = $this->input->post('username');
		    $uemail = $this->input->post('email');
		    $ucompany = $this->input->post('mobileno');
		    $umessage = $this->input->post('message');
			$data = array(
				'name' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'mobileno' => $this->input->post('mobileno'),
				'comapnyName' => $this->input->post('company'),
				'message' => $this->input->post('message')
			);
			$result = $this->users->saveContactUs($data);
			if($result){
			    /* email */
			    $config = array();
                $config['protocol']     = "smtp";
                $config['smtp_host']    = "ssl://smtp.googlemail.com";
                $config['smtp_user']    = "redwoodcube@gmail.com";
                $config['smtp_pass']    = "redwoodcube@123";
                $config['smtp_port']    =  465;
                $config['smtp_crypto']  = 'ssl';
                $config['smtp_timeout'] = "";
                $config['mailtype']     = "html";
                $config['charset']      = "iso-8859-1";
                $config['newline']      = "\r\n";
                $config['wordwrap']     = TRUE;
                $config['validate']     = FALSE;
                $this->load->library('email', $config);
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
                $this->email->set_newline("\r\n");
                $from_email = 'redwoodcube@gmail.com';
                $to_email = 'redwoodcube@gmail.com';
                //Load email library
                $this->email->from($from_email);
                $this->email->to($to_email);
                $sub = 'Contact Us-'.$uname;
                $this->email->subject($sub); 
                $msg = "Name : ".$uname. "<br>"." Email : ".$uemail."<br>"." Company name : ".$ucompany."<br>"." Message : ".$umessage;
                $this->email->message($msg);
                //Send mail
                if($this->email->send()){
                    $data = array(
					'msg' => 'Thank you for contact us.We will contact soon.'
				);
				$this->session->set_userdata($data);
				//echo "<li>".$currentClass.'#contactusfrm'
				redirect($currentClass.'#contactusfrm');
                }
                else{
                    echo "email_not_sent";
                    echo $this->email->print_debugger();  // If any error come, its run
                }
			    /* end email*/
			}            
		}else{
			if(!empty($this->session->userdata("username"))){
				$this->session->unset_userdata('username');
			}
			if(!empty($this->session->userdata("email"))){
				$this->session->unset_userdata('email');
			}
			if(!empty($this->session->userdata("mobileno"))){
				$this->session->unset_userdata('mobileno');
			} 
			$data =$this->form_validation->error_array();
			$this->session->set_userdata($data);
			redirect($currentClass.'#contactusfrm');
		} 
	}
}
