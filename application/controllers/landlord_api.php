<?php

class Landlord_api extends CI_Controller {

//===============================================================================================
public function add_house(){

        $this->load->model('landlord_model');
        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('name', 'House Name', 'required|min_length[3]|max_length[46]|is_unique[house.name]');
        $this->form_validation->set_rules('category', 'House Category', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('location', 'House Location', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[6]|max_length[1200]');
        $this->form_validation->set_rules('rent', 'House Rent', 'required|is_Natural');


		if ($this->form_validation->run() == FALSE)
		{
            
			$this->output->set_output(json_encode(['result'=>0, 'error'=>$this->form_validation->error_array() ]));
            return false;
		}else {
            
        $name= $this->input->post('name');
        $category= $this->input->post('category');
        $location= $this->input->post('location');
        $description= $this->input->post('description');
        $rent= $this->input->post('rent');

        $result = $this->landlord_model->add_house([
                'name'=>$name,
                'category'=>$category,
                'location'=>$location,
                'description'=>$description,
                'cost'=>$rent,
                'landlord_email'=>'email',
                'status'=>'Vacant'
            ]);        

       if ($result) {
            $this->output->set_output(json_encode(['result'=>1]));
            return false;
       }

        $this->output->set_output(json_encode(['result'=>0, 'error'=>'User Not Created']));
            


        }

}   

}


?>