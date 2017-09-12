<?php

class User extends CI_controller 
{

public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
}

    public function get(){
      $data=$this->user_model->get(1);
      print_r($data); 
    }
    
    public function insert(){

    }
    
    public function update(){

    }
    
    public function delete(){

    }  


    public function login(){
      
      $email= $this->input->post('email');
      $password= $this->input->post('password');

     $result = $this->user_model->get([
          'email'=>$email,
          'password'=>$password
      ]);


       $this->output->set_content_type('application_json');

      if ($result) {
          $this->session->set_userdata(['tenant_id'=> $result[0]['tenant_id'] ]);
          $this->output->set_output(json_encode(['result'=>1]));
          return false;
      }

      $this->output->set_output(json_encode(['result'=>0]));
        
    }          
}

?>