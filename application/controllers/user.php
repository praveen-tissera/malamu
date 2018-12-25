<?php 

Class User extends CI_Controller {
    public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		//load url library
		$this->load->helper('url');

		// Load database
		$this->load->model('user_model');
		
    }  
    public function index() {
		if(isset($this->session->userdata['lawyer_detail'])){
			//if session is already set
			redirect('/user/lawyerDashBoard');
		}
		else{
			$this->load->view('home');	
		}
    }
    public function userRegistration(){
        
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('middle_name', 'First Name', 'trim|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
        $this->form_validation->set_rules('phone_number', 'Contact', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('remember', 'Terms of Service', 'trim|required');
        $this->form_validation->set_rules('police', 'Terms of Service', 'trim|required');
        $this->form_validation->set_rules('cookies', 'Cookies', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
			// $data = array(
			// 	'user_type' => 'client'
			// );
			$this->load->view('home');
			
		}
		else{
           
            $birth_date =  $this->input->post('year_start').'-'.$this->input->post('month_start').'-'.$this->input->post('day_start');
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'birthday' => $birth_date,
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
                'register_date' => date("Y-m-d H:i:s"),
                
				
                );
               
            $result = $this->user_model->client_registration($data);
            if ($result == 'registered') {
                $data['success_message_display'] = 'Registered Successfully!.';
                $this->load->view('home', $data);
            }elseif($result == 'duplicate'){
                $data['error_message_display'] = 'Duplicate Username ! Try with new username.';
                $this->load->view('home', $data);
            }
        }
    }

    public function login(){
        $this->load->view('login');
    }
    public function aboutus(){
        
        $this->load->view('about-us');
    }
}