<?php defined('BASEPATH') OR exit('No direct script access allowed');
class models extends CI_Model {
		
		function getAlltrain(){
			
            $this->db->where('the_origin.to_station2','14:55:00');
            $result = $this->db->get('the_origin');
            
			return $result;
        }
        function menu_insert($data){
			$this->db->insert('the_origin',$data);
        }
    }
?>