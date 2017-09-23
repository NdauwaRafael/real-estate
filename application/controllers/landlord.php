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
public function add_tenants(){

           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/tenants/add_tenants_view');
           $this->load->view('landlord/inc/footer_view'); 
}
//===============================================================================================

//===============================================================================================
public function view_tenants(){

           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/tenants/view_tenants_view');
           $this->load->view('landlord/inc/footer_view'); 
}
//===============================================================================================


//===============================================================================================
public function bills(){

           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/bills/bills_view');
           $this->load->view('landlord/inc/footer_view'); 
}
//===============================================================================================


//===============================================================================================
public function add_house(){

           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/house/add_house_view');
           $this->load->view('landlord/inc/footer_view'); 
}
//===============================================================================================


//===============================================================================================
public function view_house(){

           $this->load->view('landlord/inc/header_view');
           $this->load->view('landlord/inc/side_view');
           $this->load->view('landlord/house/view_house_view');
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