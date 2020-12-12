<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        // Model
        $this->load->model('users');
        // Session
        $this->load->library('session');
    }
	
	public function index()
	{
        $this->load->view('admin/login/index');
       
	}

	public function userLogin(){
		//echo "<pre>";print_r($this->input->post());die;
		$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE){
               // redirect('admin/login');
               $this->load->view('admin/login/index');
			}else{
                $username = $this->input->post('username');
                $password = base64_encode($this->input->post('password'));
                
                $isValid = $this->users->isValidate($username,$password, 1);
                //echo "<pre>";print_r($isValid);die("i m her22222e");
                if($isValid){
                    $userData = array(
                        'email'     => $isValid['email'],
                        'firstName' => $isValid['firstName'],
                        'lastName'  => $isValid['lastName'],
                        'logged_in' => TRUE
					);
					//echo "<pre>";print_r($isValid);die("i m anand");        
                    $this->setSessionData($userData);                
                    redirect('admin/dashboard/index');
                }else{
                        $this->session->set_flashdata('error',"Invalid username or password!");
                        redirect('admin/login/userLogin');
                }
            }
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('userSession');
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
