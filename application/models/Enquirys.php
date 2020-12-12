<?php 

class Enquirys extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function saveEnquiry($data){
        $this->db->insert('enquiry', $data);
		return $this->db->insert_id();
    }
	
	
}



?>