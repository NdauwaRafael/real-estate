<?php
class Landlord extends CI_Controller 
{

//===============================================================================================
public function index(){
           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/landlord_view');
           $this->load->view('landlord/inc/footer_view');    
}
//===============================================================================================



//===============================================================================================
public function logout(){
   session_destroy();
   redirect('/');
}
//===============================================================================================


}
?>