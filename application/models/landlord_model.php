<?php

class Landlord_model extends CI_model 
{

 public function add_house($house){
      $this->db->insert('house', $house);
      return $this->db->insert_id();

 }

 public function view_house(){

 }
}
?>