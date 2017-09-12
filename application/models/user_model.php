<?php

class User_model extends CI_model 
{

        public function get($tenant_id=null)
        {

            if ($tenant_id===null) {
                $q = $this->db->get('tenant');

            }elseif(is_array($tenant_id)){
             $q = $this->db->get_where('tenant', $tenant_id);

            }else {
                $q = $this->db->get_where('tenant', ['tenant_id'=>$tenant_id]);

            }

            return $q->result_array();
               
        }
    
    public function insert(){

    }
    
    public function update(){

    }
    
    public function delete(){

    }            
}

?>