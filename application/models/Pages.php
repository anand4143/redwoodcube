<?php 

class Pages extends CI_Model{

    


    public function getPagesMetas($page){
        $rs = $this->db->get_where('pages', array( 'pageCode' => $page), 1);
        //print_r($this->db->last_query());
		if($rs->num_rows() == 0){
				return false;
		}
       // print_r($rs->row()->id);die;
        
        $query  = $this->db->query("select t1.*, t2.pageName from seocontent t1, pages t2 where t1.pageId = t2.id and t1.pageId=".$rs->row()->id);
        //echo "<li>".$this->db->last_query();die;
        return $query->result();
        

    }

    

    

    
}



?>