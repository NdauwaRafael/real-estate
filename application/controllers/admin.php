<?php
class Admin extends CI_Controller 
{


public function index(){
           $this->load->view('admin/inc/header_view');
           $this->load->view('admin/admin_view');
           $this->load->view('admin/inc/footer_view');    
}


public function logout(){
   session_destroy();
   redirect('/');
}

}
?>