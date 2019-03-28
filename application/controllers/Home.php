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
            $this->form_validation->set_rules('name','Name','trim|required');
            $this->form_validation->set_rules('phone','phone','trim');
            $this->form_validation->set_rules('subject','subject','trim');
            $this->form_validation->set_rules('country','country','trim|required');
            $this->form_validation->set_rules('email','email','trim|required|min_length[4]|max_length[100]|valid_email');
            $this->form_validation->set_rules('message','message','trim|required|min_length[5]|max_length[400]');
            if($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', 'Please fill up all field properly!');
                if ($this->agent->is_referral()){
                    echo $this->agent->referrer();
                    redirect($this->agent->referrer(), 'refresh');
                }
            }else{
                $send_message = $this->crud_model->send_message();
                if ($send_message == 'true'){
                    $toEmail = 'matesglobal.it@gmail.com';
                    $subject = 'Response from: mates global Contact us page';
                    $config = Array(        
                        'protocol' => 'sendmail',
                        'smtp_host' => 'sg3plcpnl0040.prod.sin3.secureserver.net',
                        'smtp_port' => 465,
                        'smtp_user' => 'no_reply@matesgroup.com.au',
                        'smtp_pass' => '&Ds2NbI3Jk',
                        'smtp_timeout' => '4',
                        'mailtype'  => 'html', 
                        'charset'   => 'utf-8',
                        'wordwrap' => TRUE
                    );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                    $this->email->set_header('Content-type', 'text/html');
                
                    $this->email->from('no_reply@matesgroup.com.au', 'MatesGroup');
                    $this->email->to($toEmail);  
                    $this->email->subject($subject); 
                
                    $body = "Name: ".$this->input->post('name')." <br>Email: ".$this->input->post('email')." <br>Contact: ".$this->input->post('phone')."<br>Country: ".$this->input->post('country')."<br> Subject: ".$this->input->post('subject')."<br> Message: ".$this->input->post('message');
                    $this->email->message($body);   
                    $this->email->send();

                    $this->session->set_flashdata('success', 'Message sent successfully, you will get the response as soon as possible!');
                    redirect(site_url('contact'), 'refresh');
                }else{
                    $this->session->set_flashdata('error', 'Something went wrong');
                    redirect(site_url('contact'), 'refresh');
                }
            }
        }
        $data['countries'] = $this->db->get_where('countries')->result_array();
		$this->load->view('header');
		$this->load->view('contact', $data);
		$this->load->view('footer');
	}
    public function submitYourJob(){
        $this->load->library('user_agent');

        $this->form_validation->set_rules('job_categories','job categories','trim|required');
        $this->form_validation->set_rules('comapny_name','comapny name','trim|required');
        $this->form_validation->set_rules('email','email','trim|required');
        $this->form_validation->set_rules('phone','phone','trim|required');
        $this->form_validation->set_rules('type_of_employment','type of employment','trim|required');
        $this->form_validation->set_rules('job_title','job title','trim|required');
        $this->form_validation->set_rules('no_of_employees','no of employees','trim|required');
        $this->form_validation->set_rules('hours_required_per_week','hours required per week','trim|required');
        $this->form_validation->set_rules('commencement_date','commencement_date','trim|required');
        $this->form_validation->set_rules('message','message','trim|required');

        if($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', 'Please fill up all field properly!');
                //print_r(validation_errors());
                redirect(site_url('contact'), 'refresh');
        }else{
            $submitjob = $this->crud_model->submitYourJob();
            if ($submitjob == 'true'){
                $toEmail = 'matesglobal.it@gmail.com';
                $subject = 'Response from: mates global';
                $config = Array(        
                    'protocol' => 'sendmail',
                    'smtp_host' => 'sg3plcpnl0040.prod.sin3.secureserver.net',
                    'smtp_port' => 465,
                    'smtp_user' => 'no_reply@matesgroup.com.au',
                    'smtp_pass' => '&Ds2NbI3Jk',
                    'smtp_timeout' => '4',
                    'mailtype'  => 'html', 
                    'charset'   => 'utf-8',
                    'wordwrap' => TRUE
                );

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
            
                $this->email->from('no_reply@matesgroup.com.au', 'MatesGroup');
                $this->email->to($toEmail);  
                $this->email->subject($subject); 
            
                $body = "Company name: ".$this->input->post('name')." <br>Job categories: ".$this->input->post('job_categories')." <br>Email: ".$this->input->post('email')." <br>Contact: ".$this->input->post('phone')."<br>Type of employment: ".$this->input->post('type_of_employment')."<br> Job title: ".$this->input->post('job_title')."<br> No. of employees: ".$this->input->post('no_of_employees')."<br> Hours required per week: ".$this->input->post('hours_required_per_week')."<br> Commencement date: ".$this->input->post('commencement_date')."<br> Message: ".$this->input->post('message');
                $this->email->message($body);   
                $this->email->send();

                $this->session->set_flashdata('success', 'Successfully submited!');
            }else{
                $this->session->set_flashdata('error', get_phrase('something_went_wrong!'));
            }
        }
        
        if ($this->agent->is_referral()){
            echo $this->agent->referrer();
            redirect($this->agent->referrer(), 'refresh');
        }
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
