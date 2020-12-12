<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourteam extends MY_Controller {
   

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
		$this->load->view('ourteam/index',$data);
    }
    
    

}
