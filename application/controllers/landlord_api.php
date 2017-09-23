<?php

class Landlord_api extends CI_Controller {

//===============================================================================================
public function add_house(){

        $this->load->model('landlord_model');
        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('name', 'House Name', 'required|min_length[3]|max_length[46]|is_unique[house.name]');
        $this->form_validation->set_rules('category', 'House Category', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('estate', 'House Location', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[6]|max_length[1200]');
        $this->form_validation->set_rules('rent', 'House Rent', 'required|is_Natural');


		if ($this->form_validation->run() == FALSE)
		{
            
			$this->output->set_output(json_encode(['result'=>0, 'error'=>$this->form_validation->error_array() ]));
            return false;
		}else {
            
        $name= $this->input->post('name');
        $category= $this->input->post('category');
        $estate= $this->input->post('estate');
        $description= $this->input->post('description');
        $rent= $this->input->post('rent');

        $result = $this->landlord_model->add_house([
                'name'=>$name,
                'category'=>$category,
                'estate'=>$estate,
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

//===============================================================================================
public function view_house($house_id=null){
    if ($house_id != null) {
        $this->db->where(['house_id'=>$house_id]);
    }
$query = $this->db->get('house');
$house_response = $query->result_array();

$this->output->set_output(json_encode($house_response));

}  
//===============================================================================================
 

//===============================================================================================

 public function add_estate(){


  $this->load->model('landlord_model');
        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('name', 'Estate Name', 'required|min_length[3]|max_length[46]|is_unique[estate.name]');
        $this->form_validation->set_rules('category', 'Category', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('location', 'Estate Location', 'required|min_length[3]|max_length[260]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[6]|max_length[1200]');
        $this->form_validation->set_rules('unit', 'Number of units', 'required|is_Natural');


		if ($this->form_validation->run() == FALSE)
		{
            
			$this->output->set_output(json_encode(['result'=>0, 'error'=>$this->form_validation->error_array() ]));
            return false;
		}else {
            
        $name= $this->input->post('name');
        $category= $this->input->post('category');
        $location= $this->input->post('location');
        $description= $this->input->post('description');
        $unit= $this->input->post('unit');

        $result = $this->landlord_model->add_estate([
                'name'=>$name,
                'category'=>$category,
                'location'=>$location,
                'description'=>$description,
                'units'=>$unit,
                'owner'=>'email'
            ]);        

       if ($result) {
            $this->output->set_output(json_encode(['result'=>1]));
            return false;
       }

        $this->output->set_output(json_encode(['result'=>0, 'error'=>'Estate Not Created']));
            


        }
 }
//===============================================================================================
public function view_estate($estate_id=null){
    if ($estate_id != null) {
        $this->db->where(['estate_id'=>$estate_id]);
    }
$query = $this->db->get('estate');
$estate_response = $query->result_array();

$this->output->set_output(json_encode($estate_response));

}  
//===============================================================================================
 



}


?> 