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
                //once user submit sign up form call this function sendSMSVerification

                $data['success_message_display'] = 'Registered Successfully!.';
                $this->load->view('home', $data);
            }elseif($result == 'duplicate'){
                $data['error_message_display'] = 'Duplicate Username ! Try with new username.';
                $this->load->view('home', $data);
            }
        }
    }

    public function login(){
        //if user already logged need to direct to dashboard
        $this->load->view('login');
    }
    public function userLogin(){
        
        //if rememberme true need to set cookie
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
            $data = array(
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password'))
            );
            $result = $this->user_model->user_login($data);
            if ($result == 'nouser') {
                $data = array(
					'error_message_display' => 'Invalid Username or Password',
					);
					$this->load->view('login', $data);
            } else {
                //print_r($result);
                //echo $result[0]->user_id;
                $this->session->set_userdata('userID', $result[0]->user_id);
					redirect('/user/userDashBoard');
            }
            
            
        }
    }
    public function userDashBoard(){
        $this->load->view('dashboard');
    }
    public function showSMSVerification(){
        $this->load->view('send-sms');
    }
    public function sendSMSVerification(){
        require_once ('vendor/autoload.php');
        $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('3bdcda87', 'VzU5h0Tf42aGJkeL'));
        // $this->load->view('send-sms');
        // $message = $client->message()->send([
        //     'to' => '94713691344',
        //     'from' => '94764354111',
        //     'text' => 'Hi welcom  !!'
        // ]);
        // echo "sent";

        //once user submit sign up form call this function
            
            $verification = $client->verify()->start([
                'number' => '94764354111',
                'brand'  => 'Malamu'
            ]);
            echo "Started verification with an id of: " . $verification->getRequestId();
            $this->session->set_userdata('verificaitionCode', $verification->getRequestId());
            //redirect('/user/verifyPhoneNumber');
            echo 'verification code sent';
        
            $this->load->view('submit_verification');
        

           
    }
    public function verifyPhoneNumber(){
        require_once ('vendor/autoload.php');
        $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('3bdcda87', 'VzU5h0Tf42aGJkeL'));
        if ($this->input->post('verification-code') != NULL) {
           // $verification_id = $verification->getRequestId();
            $verification = new \Nexmo\Verify\Verification($this->session->verificaitionCode);

            try {
                $client->verify()->check($verification, $this->input->post('verification-code'));
                echo "Verification was successful (status: " . $verification['status'] . ")\n";
            } catch (Exception $e) {
                $verification = $e->getEntity();
                echo "Verification failed with status " . $verification['status']
                    . " and error text \"" . $verification['error_text'] . "\"\n";
            }
        }else{
            $this->load->view('submit_verification_code');
        }

        
    }
    public function aboutus(){
        
        $this->load->view('about-us');
    }
}