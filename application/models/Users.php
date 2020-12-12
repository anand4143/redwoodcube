<?php 

class Users extends CI_Model{

    public function isValidate($username,$password){
        $this->db->where(['email' => $username, 'password' => $password] );
		
        $q = $this->db->get('users');
        if( $q->num_rows() ){
            $q = $this -> db
           -> select('*')
           -> where('email', $username)
           -> limit(1)
           -> get('users');
           $row = $q->row_array();
            return $row;
        }else{
            return false;
        }
    }

    public function save($data){
        $this->db->insert('seocontent', $data);
        return $this->db->insert_id();
    }

    public function getAllPages(){
        $this->db->select('*');
        $this->db->from('quickrequest');
        $query = $this->db->get();
       //echo "<li>".$this->db->last_query();
        return $query->result();

	}
	
	public function getAllcontact(){
        $this->db->select('*');
        $this->db->from('contact_us');
        $query = $this->db->get();
       //echo "<li>".$this->db->last_query();
        return $query->result();

    }

    public function saveContactUs($data){
        $this->db->insert('contact_us', $data);
        return $this->db->insert_id();
    }
    public function saveQuickRequest($data){
        $this->db->insert('quickrequest', $data);
        return $this->db->insert_id();
    }

   

    

    

    
}



?>
