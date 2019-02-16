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
        //load cookie
        $this->load->helper('cookie');
		
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
       // $this->form_validation->set_rules('remember', 'Terms of Service', 'trim|required');
       // $this->form_validation->set_rules('police', 'Terms of Service', 'trim|required');
       // $this->form_validation->set_rules('cookies', 'Cookies', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
			// $data = array(
			// 	'user_type' => 'client'
			// );
			$this->load->view('home');
			
		}
		else{
           
            $birth_date =  $this->input->post('year_start').'-'.$this->input->post('month_start').'-'.$this->input->post('day_start');
			$data_form = array(
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'birthday' => $birth_date,
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
                'phone_verification' => 'verified',
                'register_date' => date("Y-m-d H:i:s"),
                
				
                );
               $result_check_phone_number = $this->user_model->search_phone($this->input->post('phone_number'));
               if ($result_check_phone_number == 'duplicate') {
                    $data['error_message_display'] = 'Duplicate Phone Number ! Try with new number.';
                    $this->load->view('home', $data);
               }else{
                    $this->session->set_userdata('sign_up', $data_form);
                    $phone_verification = array(
                        'phone_number' => $this->input->post('phone_number'),
                    );
                    $this->sendSMSVerification($phone_verification);
               }
            //$result_record_id = $this->user_model->client_registration($data_form);
            

            // if ($result_record_id >= 1) {
            //     //once user submit sign up form call this function sendSMSVerification

            //     //$data['success_message_display'] = 'Registered Successfully!.';
            //    // $this->load->view('home', $result_record_id);
            //     $phone_verification = array(
            //         'phone_number' => $this->input->post('phone_number'),
            //         'db_record_id' =>  $result_record_id
            //     );
            //     $this->sendSMSVerification($phone_verification);

            // }elseif($result_record_id == 'duplicate'){
            //     $data['error_message_display'] = 'Duplicate Username ! Try with new username.';
            //     $this->load->view('home', $data);
            // }
        }
    }

    public function login(){
        //if user already logged need to direct to dashboard
        ///echo $this->session->userdata['userID'];
        //if user already loged need to direct to dashboard
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			redirect('/user/userDashBoard');
		}else{
            $this->load->view('login');
        }
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
                $this->session->set_userdata('firstName', $result[0]->first_name);
                $this->session->set_userdata('lastName', $result[0]->last_name);
                if(isset($_POST['rememberme']) && $_POST['rememberme'] == 1){
                    $token = sha1($this->input->post('username'));
                    $result_set_cookie = $this->user_model->set_cookie($result[0]->user_id,$token);
                    if($result_set_cookie == 'updated'){
                       // print_r($_POST);
                    
                        $name   = 'malamuuser';
                        $value  = $token;
                        $expire = time()+1000;
                        $path  = '/';
                        $secure = TRUE;
                    
                        setcookie($name,$value,$expire,$path); 
                        redirect('/user/userDashBoard');
                    }else{
                        echo "error";
                    }

                    
                    
                }else{
                    redirect('/user/userDashBoard');
                }
                
					
            }
            
            
        }
    }
    public function userLogout(){
        $this->session->unset_userdata('userID');
				$data['success_message_display'] = 'Log out sucessfully';
				
				$this->load->view('login', $data);
    }
    public function userDashBoard(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			$this->load->view('dashboard');
		}else{
            $this->load->view('login');
        }
        //check session ready and load the dashboard
        
    }
    public function showSMSVerification(){
        $this->load->view('send-sms');
    }
    public function sendSMSVerification($phone_verification,$resend='NULL'){

        //send verification code to the phone
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
            if($resend == 'resend'){
                $data = array(
                    'success_message_display' => 'Verification code resend'
                );
                
                
            }
           
          

            try{
                $verification = $client->verify()->start([
                    'number' => $phone_verification['phone_number'],
                    'brand'  => 'Malamu'
                ]);
                
                $this->session->set_userdata('verificaitionCode', $verification->getRequestId());
                $this->session->set_userdata('phone_number', $phone_verification['phone_number']);
                



                // echo "Started verification with an id of: " . $verification->getRequestId();
                //$this->session->set_userdata('db_record_id', $phone_verification['db_record_id']);
                //redirect('/user/verifyPhoneNumber');
                //echo 'verification code sent';
                if($resend == 'resend'){
                    $this->load->view('submit_verification',$data);
                }else{
                    
                    $this->load->view('submit_verification');
                }
                
            } catch (Exception $e) {
                //redirect('user');
                $verification = $e->getEntity();
                // echo "Verification failed with status " . $verification['status']
                //         . " and error text \"" . $verification['error_text'] . "\"\n";
                $data = array(
                    'error_message_display' => $verification['error_text']
                );
                
                $this->load->view('home', $data);
            }
            
            

           
    }
    public function verifyPhoneNumber(){
        //get the user enterd code to verification 
        if($this->input->post('submit') == 'Resend Code'){
           
            $phone_verification = array(
                'phone_number' => $this->session->userData('phone_number')
            );
            
            $this->sendSMSVerification($phone_verification,'resend');
            
        }
        $this->form_validation->set_rules('verification-code', 'Phone verification code', 'trim|required');
        if ($this->form_validation->run() == FALSE && $this->input->post('submit') == 'Verify') {
            
            //sendSMSVerification();
            //if verification code empty
            // $phone_verification = array(
            //     'phone_number' => $this->input->post('phone_number'),
            //     'db_record_id' =>  $this->input->post('db_record_id')
            // );
            $this->load->view('submit_verification');
        }else{
            
            require_once ('vendor/autoload.php');
            $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('3bdcda87', 'VzU5h0Tf42aGJkeL'));
            if ($this->input->post('verification-code') != NULL) {
                
                $verification = new \Nexmo\Verify\Verification($this->session->verificaitionCode);
               
                try {
                   
                    $client->verify()->check($verification, $this->input->post('verification-code'));
                    //echo "Verification was successful (status: " . $verification['status'] . ")\n";
                    
                    //update db with phone verified
                    //$result_update_phone_verification = $this->user_model->update_phone_verification($this->input->post('db_record_id'));

                    //complete new registration
                    $result_record_id = $this->user_model->client_registration($this->session->userdata('sign_up'));
                    if ($result_record_id >= 1) {
                         //remove session with verification code
                         $this->session->unset_userdata('verificaitionCode');
                         //add login session
                        
                         $this->session->set_userdata('userID', $result_record_id);
                         //print_r($this->session->userdata);
                        //send to dashboard with the sucessfull registration message
                     
                        redirect('user/userDashBoard');

                    }else{
                        //direct to submit_verification page
                    }
                   
                   
                } catch (Exception $e) {
                    $verification = $e->getEntity();
                    // echo "Verification failed with status " . $verification['status']
                    //     . " and error text \"" . $verification['error_text'] . "\"\n";
                        $phone_verification = array(
                            'verification_error' => $verification['error_text'] 
                        );
                        $this->load->view('submit_verification',$phone_verification);
                }
            }else{
                //$this->load->view('submit_verification_code');
            }
        }

       

        
    }
    public function aboutus(){
        
        $this->load->view('about-us');
    }



    /**
     * page helping
     */

     public function viewHelp(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
            $this->load->view('help-good');
           echo $this->input->cookie('malamuuser');
		}else{
            $this->load->view('login');
        }
       
         
     }
     /**
      * send email once help form submit
      */

    public function sendHelp(){
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|alpha');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|alpha');
        $this->form_validation->set_rules('contact_number', 'Cell phone number', 'trim|required');
        $this->form_validation->set_rules('help_type', 'What type do you need help', 'trim|required');
        $this->form_validation->set_rules('question', 'What is you question', 'trim');
       
       
		
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('help-good');
			
		}else{
            $firstName = $this->input->post('first_name');
            $lastName = $this->input->post('last_name');
            $contactNumber = $this->input->post('contact_number');
            $helpType = $this->input->post('help_type');
            $question = $this->input->post('question');
            $message = 'First Name:' . $firstName . '<br> Last Name' . $lastName . '<br> Cell Phone Number: ' . $contactNumber . '<br>What Type Do You Need: ' . $helpType . '<br> What Is Your Question: ' . $question; 
            $this->load->library('email');
            $config = array(
                'mailtype' => "html",
            );
            $this->email->initialize($config);
            $this->email->from('malamu.org','Malamu Help');
            $this->email->to('helpfromusers@malamu.org');
            $this->email->subject('HELPING IS GOOD Contact Form');
            $this->email->message($message);
    
            if ($this->email->send()) {
                
                $data_mail = array(
                    'success_message_display' => 'Your Request Sent Successfully. Thanks You.'
                );
                $this->load->view('help-good',$data_mail);
            }else{
                $data_mail = array(
                    'error_message_display' => $this->email->print_debugger()
                );
                $this->load->view('help-good',$data_mail);
            }
        }
  
    }

    /**
     * Invite Friends
     */
    public function viewInviteFriend(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			$this->load->view('invite-friend');
		}else{
            $this->load->view('login');
        }
        
    }
    /**
     * view user wallet
     */
    public function viewMyWallet(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			$this->load->view('user-wallet');
		}else{
            $this->load->view('login');
        }
        
    }
    /**
     * view user activities
     */
    public function viewUserActivities(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			$this->load->view('user-activities');
		}else{
            $this->load->view('login');
        }
        
    }

    /**
     * view user redeem
     */
    public function viewUserRedeem(){
        if(isset($this->session->userdata['userID'])){
			//if session is already set
			$this->load->view('user-redeem');
		}else{
            $this->load->view('login');
        }
        
    }


}