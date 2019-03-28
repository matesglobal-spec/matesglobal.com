<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();            
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    function sendmessage()
    {
        $data_message['name']        = $this->input->post('name');
        $data_message['email']       = $this->input->post('email');
        $data_message['phone']       = $this->input->post('phone');
        $data_message['subject']     = $this->input->post('subject');
        $data_message['message']     = $this->input->post('message');
        $data_message['country']     = $this->input->post('country');
        $data_message['createDate']  = strtotime(date("m/d/Y H:i:s"));
        $data_message['status']      = 1;
        $this->db->insert('contact_us', $data_message);
        return true;
    }
    function submitYourJob()
    {
        $data['job_categories']         = $this->input->post('job_categories');
        $data['comapny_name']           = $this->input->post('comapny_name');
        $data['email']                  = $this->input->post('email');
        $data['phone']                  = $this->input->post('phone');
        $data['type_of_employment']     = $this->input->post('type_of_employment');
        $data['job_title']              = $this->input->post('job_title');
        $data['no_of_employees']        = $this->input->post('no_of_employees');
        $data['hours_required_per_week']= $this->input->post('hours_required_per_week');
        $data['commencement_date']      = $this->input->post('commencement_date');
        $data['message']                = $this->input->post('message');
        $data['createDate']             = strtotime(date("m/d/Y H:i:s"));
        $data['status']                 = 1;
        $this->db->insert('submitYourJob', $data);
        return true;
    }
    
}
