<?php

class User_model extends CI_model 
{

        public function get($user, $tenant_id=null)
        {

            if ($tenant_id===null) {
                $q = $this->db->get($user);

            }elseif(is_array($tenant_id)){
             $q = $this->db->get_where($user, $tenant_id);

            }else {
                $q = $this->db->get_where($user, [$user.'_id'=>$tenant_id]);

            }

            return $q->result_array();
               
        }
    
    public function insert($register){
      $this->db->insert('tenant', $register);
      return $this->db->insert_id();
    }
    
    public function update(){

    }
    
    public function delete(){

    }            
}

?>