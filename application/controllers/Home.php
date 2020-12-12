<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
   

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
       // echo "<pre>";print_r($this->session->userdata());die;
        $data['currentClass'] = $this->getCurrentURL();
		//$res['pages'] = $this->pages->getPagesMetas('home-page');
		$this->load->view('home',$data);
    }
    
    

    public function quickRequest(){
// 		echo "<pre>";
// 		 print_r($this->input->post());
// 		 die('here');
        if(!empty($this->session->userdata("msgquickRequest"))){
            $this->session->unset_userdata('msgquickRequest');
        }
        $howCanhelp  = $this->input->post('howCanhelp');
		$projectDescription = $this->input->post('projectDescription');
		$urgentNeed = $this->input->post('urgentNeed');
		$uname = $this->input->post('username');
		$contactno = $this->input->post('contactno');
		$uemail = $this->input->post('email');
		    
        $data = array(
            'howCanhelp' => $this->input->post('howCanhelp'),
            'projectDescription' => $this->input->post('projectDescription'),
            'urgentNeed' => $this->input->post('urgentNeed'),
			'username' => $this->input->post('username'),
			'contactNo' => $this->input->post('contactno'),
            'email' => $this->input->post('email')
		);
		
	
			$result = $this->users->saveQuickRequest($data);
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
                $sub = 'Quick request-'.$uname;
                $this->email->subject($sub); 
                $msg = "Name : ".$uname. "<br>"." Email : ".$uemail."<br>"." Contactno : ".$contactno."<br>"." How can help : ".$howCanhelp."<br>"." Project description : ".$projectDescription."<br>"." Urgent need : ".$urgentNeed;
                $this->email->message($msg);
                //Send mail
                if($this->email->send()){
                    $data = array(
					'msgquickRequest' => 'Thank you for contact us.We will contact soon.'
				);
				$this->session->set_userdata($data);
				
				$this->session->set_userdata($data);
				
				redirect('home#quickRequest');
                }else{
                    echo "email_not_sent";
                    echo $this->email->print_debugger();  // If any error come, its run
                }
			    /* end email*/
			}
			
		
             
	}
	
	
}
