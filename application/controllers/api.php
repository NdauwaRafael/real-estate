<?php 

class Api extends CI_Controller {
//===============================================================================================
public function __construct(){
    parent::__construct();
    $user_id=$this->session->userdata('tenant_id');
  /*  if (!$user_id) {
        $this->logout();
    }*/
}
//===============================================================================================



//===============================================================================================
 public function login(){
        $this->load->model('user_model');
        $email= $this->input->post('email');
        $user = $this->input->post('user');
        $password= $this->input->post('password');
        $enc_pass = hash('sha256', $password . WHISPER);

        $result = $this->user_model->get($user, [
                'email'=>$email,
                'password'=>$enc_pass
            ]);


       $this->output->set_content_type('application_json');

       if ($result) {

           if ($user=='tenant') {
                    $this->session->set_userdata(['tenant_id'=> $result[0]['tenant_id'] ]);
                    $this->output->set_output(json_encode(['result'=>1, 'data'=> 'tenant']));
           }elseif ($user=='landlord') {
                     $this->session->set_userdata(['landlord_id'=> $result[0]['landlord_id'] ]);
                     $this->output->set_output(json_encode(['result'=>1, 'data'=> 'landlord']));
           }elseif ($user=='admin') {
                     $this->session->set_userdata(['admin_id'=> $result[0]['admin_id'] ]);
                     $this->output->set_output(json_encode(['result'=>1, 'data'=> 'admin']));
           }
           
            
            return false;
       }

       $this->output->set_output(json_encode(['result'=>0]));
            
    }        
//===============================================================================================



//===============================================================================================
    public function register(){
        $this->load->model('user_model');
        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[3]|max_length[16]');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[3]|max_length[16]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[8]|is_unique[tenant.email]');
        $this->form_validation->set_rules('idno', 'National Id Number', 'required|min_length[6]|max_length[12]|is_natural|is_unique[tenant.idno]');
        $this->form_validation->set_rules('occ', 'Occupation', 'required|min_length[4]|max_length[36]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[16]|matches[c_pass]');

		if ($this->form_validation->run() == FALSE)
		{
            
			$this->output->set_output(json_encode(['result'=>0, 'error'=>$this->form_validation->error_array() ]));
            return false;
		}
      
        $fname= $this->input->post('fname');
        $lname= $this->input->post('lname');
        $email= $this->input->post('email');
        $idno= $this->input->post('idno');
        $occ= $this->input->post('occ');
        $password= $this->input->post('password');
        $c_pass= $this->input->post('c_pass');
        $enc_pass = hash('sha256', $password . WHISPER);

        $result = $this->user_model->insert([
                'firstname'=>$fname,
                'lastname'=>$lname,
                'email'=>$email,
                'idno'=>$idno,
                'occupation'=>$occ,
                'password'=>$enc_pass
            ]);


     

       if ($result) {
            $this->session->set_userdata(['tenant_id'=> $result ]);
            $this->output->set_output(json_encode(['result'=>1]));
            return false;
       }

        $this->output->set_output(json_encode(['result'=>0, 'error'=>'User Not Created']));
            
    }  
//===============================================================================================
/*End Register*/
//===============================================================================================

}

?>