<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('index');
		$this->load->view('footer');
	}
    
    public function contact($param1='')
	{
        if($param1=='sendmessage'){
            $send_message = $this->crud_model->send_message();
            if ($send_message == 'true'){
                $this->session->set_flashdata('success', 'Successfully submited!');
            }else{
                $this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            }
        }
        $data['countries'] = $this->db->get_where('countries')->result_array();
		$this->load->view('header');
		$this->load->view('contact', $data);
		$this->load->view('footer');
	}
    
    public function our_approach()
	{
		$this->load->view('header');
		$this->load->view('our_approach');
		$this->load->view('footer');
	}
    public function vision_and_values()
    {
        $this->load->view("header");
        $this->load->view("vision_and_values");
        $this->load->view("footer");
    }
    
    public function our_commitment()
    {
        $this->load->view("header");
        $this->load->view("our_commitment");
        $this->load->view("footer");
    }
    public function our_team()
    {
        $this->load->view("header");
        $this->load->view("our_team");
        $this->load->view("footer");
    }
    public function our_approach_clients()
    {
        $this->load->view("header");
        $this->load->view("our_approach_clients");
        $this->load->view("footer");
    }
    public function our_specialisations()
    {
        $this->load->view("header");
        $this->load->view("our_specialisations");
        $this->load->view("footer");
    }
   public function promote_your_business()
    {
        $this->load->view("header");
        $this->load->view("promote_your_business");
        $this->load->view("footer");
    }
    
    public function submit_job_vacancy()
    {
        $this->load->view("header");
        $this->load->view("submit_job_vacancy");
        $this->load->view("footer");
    }
    public function our_approach_candidates()
    {
        $this->load->view("header");
        $this->load->view("our_approach_candidates");
        $this->load->view("footer");
    }
    
    public function tips_and_advise()
     {
        $this->load->view("header");
        $this->load->view("tips_and_advise");
        $this->load->view("footer");
     }
    public function frequently_asked_questions()
     {
        $this->load->view("header");
        $this->load->view("frequently_asked_questions");
        $this->load->view("footer");
     }
    
    public function submit_resume()
     {
        $this->load->view("header");
        $this->load->view("submit_resume");
        $this->load->view("footer");
     }
    
    public function job_search_advisor()
     {
        $this->load->view("header");
        $this->load->view("job_search_advisor");
        $this->load->view("footer");
     }
    public function global_candidate_search()
     {
        $this->load->view("header");
        $this->load->view("global_candidate_search");
        $this->load->view("footer");
     }
    public function global_immigration_services()
     {
        $this->load->view("header");
        $this->load->view("global_immigration_services");
        $this->load->view("footer");
     }

    public function global_offices()
     {
        $this->load->view("header");
        $this->load->view("global_offices");
        $this->load->view("footer");
     }
    public function about()
     {
        $this->load->view("header");
        $this->load->view("about");
        $this->load->view("footer");
     }
//    commnet ------------------------------------------------------------------------
    public function construction_skilled_workers()
     {
        $this->load->view("header");
        $this->load->view("construction_skilled_workers");
        $this->load->view("footer");
     }
    
    public function civil_skilled_workers()
     {
        $this->load->view("header");
        $this->load->view("civil_skilled_workers");
        $this->load->view("footer");
     }
    
    public function building_skilled_workers()
     {
        $this->load->view("header");
        $this->load->view("building_skilled_workers");
        $this->load->view("footer");
     }
    
    public function powerplant_skilled_workers()
     {
        $this->load->view("header");
        $this->load->view("powerplant_skilled_workers");
        $this->load->view("footer");
     }
    
    public function mining_skilled_workers()
     {
        $this->load->view("header");
        $this->load->view("mining_skilled_workers");
        $this->load->view("footer");
     }
    
    public function candidate_search()
     {
        $this->load->view("header");
        $this->load->view("candidate_search");
        $this->load->view("footer");
     }
    
    public function corporate_migration()
     {
        $this->load->view("header");
        $this->load->view("corporate_migration");
        $this->load->view("footer");
     }
    
    public function global_partnership_opportunities()
     {
        $this->load->view("header");
        $this->load->view("global_partnership_opportunities");
        $this->load->view("footer");
     }
        
     public function local_offices()
     {
        $this->load->view("header");
        $this->load->view("local_offices");
        $this->load->view("footer");
     }
    
    
}
