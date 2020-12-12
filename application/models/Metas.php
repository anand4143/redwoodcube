<?php 

class Metas extends CI_Model{

    


    public function getAllPages(){
        $this->db->select('*');
        $this->db->from('seocontent');
        $query = $this->db->get();
       // echo "<li>".$this->db->last_query();
        return $query->result();

    }

    

    

    
}



?>