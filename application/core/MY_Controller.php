<?php
    class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->output->enable_profiler(TRUE);
		}
		
        public function setSessionData($userData){
			//echo "<pre>";print_r($userData);die;
            //$this->session->set_userdata('userSession',$userData);  
		    //$this->session->set_userdata('logged_in', TRUE);  	
		    $this->session->set_userdata($userData);
        }
		
        public function getSessionData($key = ''){
            //return $this->session->userdata('userSession');
		    return !empty($key) ? $this->session->userdata($key) : $this->session->userdata();			
        }
		
		public function auth(){
			$segment = $this->uri->segment(1);
			if(!$this->session->userdata('email') || $this->session->userdata('logged_in') !== TRUE){		 
			  if($segment == 'admin'){
				  redirect('admin');
			  }
			  redirect('admin/login/userLogin');
			} else if($this->session->userdata('logged_in') === TRUE) {
				
				
			}
		}
		
		public function get_client_id(){
			$ip = '';
			if (!empty($_SERVER['HTTP_CLIENT_IP']))
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			else if(!empty($_SERVER['HTTP_X_FORWARDED']))
				$ip = $_SERVER['HTTP_X_FORWARDED'];
			else if(!empty($_SERVER['HTTP_FORWARDED_FOR']))
				$ip = $_SERVER['HTTP_FORWARDED_FOR'];
			else if(!empty($_SERVER['HTTP_FORWARDED']))
				$ip = $_SERVER['HTTP_FORWARDED'];
			else if(!empty($_SERVER['REMOTE_ADDR']))
				$ip = $_SERVER['REMOTE_ADDR'];
			else
				$ip = 'UNKNOWN';
		 
			return $ip;
		}
		
		public function get_device_id(){
			return 0;
		}

		public function getCurrentURL(){
			return $this->router->fetch_class();;
		}
		
    }

?>
