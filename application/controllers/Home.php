<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->library('form_validation');
     	$this->load->helper('form');
        $src = $this->agent->is_referral()?explode('/',$this->agent->referrer()):NULL;
        $device = $this->agent->is_mobile() ? $this->agent->mobile() : "PC";
        $cur_link = uri_string() == NULL ? 'home' : end(explode('/',uri_string()));
        $cookie = array(
            'name'   => 'MG_Cookie',
            'ip' => $this->input->ip_address(),
            'src' => $src[2],
            'page_link' => $cur_link,
            'browser' => $this->agent->browser(),
            'browser_ver' => $this->agent->version(),
            'os' => $this->agent->platform(),
            'device' => $device,
            'value'  => 'This is value set by MatesGroup',
            'expire' => '3155692600'
        );
        foreach($cookie as $key=>$value){
            setcookie($key, $value, null);
        }
    }

    public function get()
    {
        echo $this->input->cookie('MG_Cookie',true);
        $cookiess = $this->_fetch_from_array($_COOKIE, $index, $xss_clean);
        print_r($cookiess);
    }
 

	public function index()
	{
        $page_data['locations'] = $this->db->get_where('locations', array('status'=> 1))->result_array();
        $page_data['testimonials'] = $this->db->get_where('testimonial', array('status'=> 1))->result_array();
        $page_data['title']           = "Mates Group - Recruitment & Labour Hire Solutions";
        $page_data['keywords']        = "Mates Group, best recruitment agencies, labour hire in Australia, labour hire Perth, skilled labour hire, contract labour hire";
        $page_data['metadescription'] = "We are providing recruitment & Labour Hire Solutions to meet any hiring need you have. Mates Group provides services across the Australia and worldwide.";
		$this->load->view('header', $page_data);
		$this->load->view('index', $page_data);
		$this->load->view('footer');
	}
    
    public function about()
    {
    	$page_data['title']           = "Recruitment & Labour Hire Solutions - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, contract labour hire";
        $page_data['metadescription'] = "We are providing recruitment & Labour Hire Solutions to meet any hiring need you have. Mates Group provides services across the Australia and worldwide.";
        $this->load->view("header", $page_data);
        $this->load->view("about");
        $this->load->view("footer");
    }
    
    public function service()
    {
        $page_data['title']           = "Recruitment & Labour Hire Solutions - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, contract labour hire";
        $page_data['metadescription'] = "We are providing recruitment & Labour Hire Solutions to meet any hiring need you have. Mates Group provides services across the Australia and worldwide.";
        $this->load->view("header", $page_data);
        $this->load->view("service");
        $this->load->view("footer");
    }
    
    public function testimonial()
    {
        $this->load->view("header");
        $this->load->view("testimonial");
        $this->load->view("footer");
    }
    
    public function partner()
    {
        $this->load->view("header");
        $this->load->view("partner");
        $this->load->view("footer");
    }
    
    public function career()
    {
        $this->load->view("header");
        $this->load->view("career");
        $this->load->view("footer");
    }
    
    public function contact()
    {
        $this->load->view("header");
        $this->load->view("contact");
        $this->load->view("footer");
    }

     public function approach()
    {
        $page_data['title']           = "Providing recruitment & Labour hire Service - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Our approach";
        $page_data['metadescription'] = "Our approach is to be an association that individuals are pleased to work for, has the trust of their customers and the networks they serve.";
        $this->load->view("header", $page_data);
        $this->load->view("approach");
        $this->load->view("footer");
    }
    public function vision()
    {
        $page_data['title']           = "Our vision is to stand strong for what is correct - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Our Vision";
        $page_data['metadescription'] = " We want to do business as the best recruitment agencies and labour hire solutions across the world.";
        $this->load->view("header", $page_data);
        $this->load->view("vision");
        $this->load->view("footer");
    }
    public function commitment()
    {
        $page_data['title']           = "Our commitment is to provide suitable employees to our clients- Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Our commitment";
        $page_data['metadescription'] = "Mates Group is committed to keep strong relationships with its clients to make them flourish. If they're not prosperous then neither are we.";
        $this->load->view("header", $page_data);
        $this->load->view("commitment");
        $this->load->view("footer");
    }
    public function team()
    {
        $page_data['title']           = "We have expert team to solve Labour Hire and Recruitment needs- Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Our team";
        $page_data['metadescription'] = "Our every team member is an expert in his or her field. they ensure that our Client receive a comprehensive recruitment & Labour hire service in Australia and worldwide.";
        $this->load->view("header", $page_data);
        $this->load->view("team");
        $this->load->view("footer");
    }
    
    public function australia_work()
    {
        $this->load->view("header");
        $this->load->view("australia_work");
        $this->load->view("footer");
    }
    
    public function handbook()
    {
        $this->load->view("header");
        $this->load->view("handbook");
        $this->load->view("footer");
    }
    public function userfull()
    {
        $this->load->view("header");
        $this->load->view("userfull");
        $this->load->view("footer");
    }
    public function mission()
    {
        $page_data['title']           = "Best recruitment agencies & Labour Hire Solutions - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Our mission";
        $page_data['metadescription'] = "Best recruitment agencies & Labour Hire Solutions to meet any hiring need you have. Mates Group provides labour hire service in Australia and worldwide.";
        $this->load->view("header", $page_data);
        $this->load->view("mission");
        $this->load->view("footer");
    }
    public function safety()
    {
        $page_data['title']           = "Security is our first need - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Safety Policy";
        $page_data['metadescription'] = "It is basic for our industry and we trust that each worker ought to hope to return home securely toward the finish of every day.";
        $this->load->view("header", $page_data);
        $this->load->view("safety");
        $this->load->view("footer");
    }
    public function why_choose(){
        $page_data['title']           = "Mates Group is committed to maintain 100% service quality";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Safety Policy";
        $page_data['metadescription'] = "We provide complete business solutions along with job placement service, IT, VISA consultancy and assures from a thorough understanding of the business benefit for your company.";
        $this->load->view("header", $page_data);
        $this->load->view("why_choose");
        $this->load->view("footer");
    }
    public function mgOfficeSupport()
    {
        $this->load->view("header");
        $this->load->view("mgOfficeSupport");
        $this->load->view("footer");
    }
    public function mgIt()
    {
        $this->load->view("header");
        $this->load->view("mgIt");
        $this->load->view("footer");
    }
    public function blog()
    {
        $this->load->view("header");
        $this->load->view("blog");
        $this->load->view("footer");
    }
    public function safety_policy()
    {
        $page_data['title']           = "Security is our first need - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Safety Policy";
        $page_data['metadescription'] = "It is basic for our industry and we trust that each worker ought to hope to return home securely toward the finish of every day.";
        $this->load->view("header", $page_data);
        $this->load->view("safety_policy");
        $this->load->view("footer");
    }
    public function privacy()
    {
        $page_data['title']           = "Privacy is essential to us - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Privacy Policy";
        $page_data['metadescription'] = "Competitors are the center of our enrollment business and we guarantee they are treated with the most abnormal amount of privacy.";
        $this->load->view("header", $page_data);
        $this->load->view("privacy");
        $this->load->view("footer");
    }
    public function terms()
    {
        $page_data['title']           = "Terms and Conditions - Mates Group";
        $page_data['keywords']        = "best recruitment agencies, Mates Group, labour hire in Australia, labour hire Perth, skilled labour hire, Terms and Conditions";
        $page_data['metadescription'] = "All missions acknowledged by Mates Group will be administered by the present General Terms and Conditions...";
        $this->load->view("header", $page_data);
        $this->load->view("terms");
        $this->load->view("footer");
    }
    public function cookiessAccept(){
    	$this->load->helper('cookie');
    	$cookie= array(

           'name'   => 'visitor ip',
           'value'  => $this->input->ip_address(),                            
           'expire' => '300000000',                                                                                   
           'secure' => TRUE

       	);

       	$this->input->set_cookie($cookie);
    	$this->session->set_userdata('cookies' , '1');
    }
    public function message(){
    	$this->form_validation->set_rules('fullname','fullname','trim|required');
        $this->form_validation->set_rules('contact','contact','trim');
        $this->form_validation->set_rules('country','country','trim|required');
        $this->form_validation->set_rules('email','email','trim|required|min_length[4]|max_length[100]|valid_email');
        $this->form_validation->set_rules('message','message','trim|required|min_length[5]|max_length[400]');
        if($this->form_validation->run() == false) {
        	$this->session->set_flashdata('error', 'Please fill up all field properly!');
        	//print_r(validation_errors());
	        redirect(site_url('contact'), 'refresh');
        }else{
	    	$timestamp = strtotime(date("Y-m-d H:i:s"));
	        $data_message['fullname'] = $this->input->post('fullname');
	        $data_message['contact'] = $this->input->post('contact');
	        $data_message['country'] = $this->input->post('country');
	        $data_message['email'] = $this->input->post('email');
	        $data_message['message'] = $this->input->post('message');
	        $data_message['timestamp'] = $timestamp;
	        if ($this->db->insert('message', $data_message)) {
	        	$toEmail = 'matesglobal.it@gmail.com';
			    $subject = 'Response from: matesgroup.com.au Contact us page';
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
		    
		        $body = "Name: ".$this->input->post('fullname')." <br>Email: ".$this->input->post('email')." <br>Contact: ".$this->input->post('contact')."<br>Country: ".$this->input->post('country')."<br> Message: ".$this->input->post('message');
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


    public function workforce()
    {
        $this->load->view("header");
        $this->load->view("workforce");
        $this->load->view("footer");
    }
    public function matesglobal()
    {
        $this->load->view("header");
        $this->load->view("matesglobal");
        $this->load->view("footer");
    }
    public function winfred()
    {
        $this->load->view("header");
        $this->load->view("winfred");
        $this->load->view("footer");
    }
}
