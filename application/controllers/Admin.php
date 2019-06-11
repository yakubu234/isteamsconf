<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('MAILGUN_API_KEY', 'e415d6a58ae45d0b8a389d17600555ee');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function register()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('firstname', 'firstname', 'required|min_length[3]');
			$this->form_validation->set_rules('surname', 'surname', 'required|min_length[3]');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]', array('is_unique' => 'The email address %s provided already exists.'));
			$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
			$this->form_validation->set_rules('phone', 'phone', 'required');
			$this->form_validation->set_rules('role', 'role', 'required');
			if ($this->form_validation->run() == false){
            // set the validation errors in flashdata (one time session)
				$this->session->set_flashdata('errors', validation_errors());
				$this->load->view('register');
				$this->load->view('footer');			
			}else{
				$data = array(
					'firstname' =>$this->input->post('firstname'),
					'password' =>md5($this->input->post('password')),
					'hash' =>md5($this->input->post('password')),
					'email' =>$this->input->post('email'),
					'surname' =>$this->input->post('surname'),
					'phone' =>$this->input->post('phone'),
					'gender' =>$this->input->post('gender'),
					'role' =>$this->input->post('role'),
					'type' =>'user'
				); 
				$insert_data = $this->User_model->insert_user($data);
				if ($insert_data) {
					$password = $this->input->post('password');
					$gender = $this->input->post('gender');
					$tag="a mail system from TechTank";
					$replyto ="admi@TechTank.ng";
          // verification email sent to users email
					$email = $this->input->post('email');
					$email_code = md5($this->input->post('email'));
					$subject1="Registration Acknowledgement";
					$message="
					<html>
					<head>
					<title>Verification Code</title>
					</head>
					<body>
					<h2>Thank you for Registering.</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Password: ".$password."</p>
					<p>Please click the link below to activate your account.</p>
					<p> ".base_url()."welcome/activate/".$gender."/". $email_code." </p>
					<p> please note that if you did not comfirm your email address you cannot signing </p>
					<p>Thank You!</P>
					</body>
					</html>
					";
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
					curl_setopt($ch, CURLOPT_USERPWD,'api:key-'. MAILGUN_API_KEY);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_URL, 
						'https://api.mailgun.net/v2/www.esoftchurch.com/messages');
					curl_setopt($ch, CURLOPT_POSTFIELDS, 
						array('from' => 'Mapoly Nacoss Treasury System System <admin@softchurch.com>',
							'to' => $data['firstname'].' <'.$email.'>',
							'subject' => $subject1,
							'html' => $message,
							'text' => $message,
							'o:tracking'=>'yes',
							'o:tracking-clicks'=>'yes',
							'o:tracking-opens'=>'yes',
							'o:tag'=>$tag,
							'h:Reply-To'=>$replyto));
					$result = curl_exec($ch);
					curl_close($ch);
          // end of verification email from user
					$this->session->set_flashdata('suc', 'Successfully Register, Check your email to activate your account!');
					$this->load->view('login');
					$this->load->view('footer');
				}
			}
		}else{
			$this->load->view('register');
			$this->load->view('footer');
		}
	}

	public function superadmin_create()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('firstname', 'firstname', 'required|min_length[3]');
			$this->form_validation->set_rules('surname', 'surname', 'required|min_length[3]');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]', array('is_unique' => 'The %s provided already exists.'));
			$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
			$this->form_validation->set_rules('phone', 'phone', 'required');
			$this->form_validation->set_rules('role', 'role', 'required');
			if ($this->form_validation->run() == false){
            // set the validation errors in flashdata (one time session)
				$this->session->set_flashdata('errors', validation_errors());
				$this->load->view('register-admin');
				$this->load->view('footer');			
			}else{
				$data = array(
					'firstname' =>$this->input->post('firstname'),
					'password' =>md5($this->input->post('password')),
					'hash' =>md5($this->input->post('password')),
					'email' =>$this->input->post('email'),
					'surname' =>$this->input->post('surname'),
					'phone' =>$this->input->post('phone'),
					'gender' =>$this->input->post('gender'),
					'role' =>$this->input->post('role'),
					'type' =>'admin'
				); 
				$insert_data = $this->User_model->insert_user($data);
				if ($insert_data) {
					$password = $this->input->post('password');
					$gender = $this->input->post('gender');
					$tag="a mail system from TechTank";
					$replyto ="admi@TechTank.ng";
          // verification email sent to users email
					$email = $this->input->post('email');
					$email_code = md5($this->input->post('email'));
					$subject1="Registration Acknowledgement";
					$message="
					<html>
					<head>
					<title>Verification Code</title>
					</head>
					<body>
					<h2>Thank you for Registering.</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Password: ".$password."</p>
					<p>Please click the link below to activate your account.</p>
					<p> ".base_url()."welcome/activate/".$gender."/". $email_code." </p>
					<p> please note that if you did not comfirm your email address you cannot signing </p>
					<p>Thank You!</P>
					</body>
					</html>
					";
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
					curl_setopt($ch, CURLOPT_USERPWD,'api:key-'. MAILGUN_API_KEY);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_URL, 
						'https://api.mailgun.net/v2/www.esoftchurch.com/messages');
					curl_setopt($ch, CURLOPT_POSTFIELDS, 
						array('from' => 'Mapoly Nacoss Treasury System System <admin@softchurch.com>',
							'to' => $data['firstname'].' <'.$email.'>',
							'subject' => $subject1,
							'html' => $message,
							'text' => $message,
							'o:tracking'=>'yes',
							'o:tracking-clicks'=>'yes',
							'o:tracking-opens'=>'yes',
							'o:tag'=>$tag,
							'h:Reply-To'=>$replyto));
					$result = curl_exec($ch);
					curl_close($ch);
          // end of verification email from user
					$this->session->set_flashdata('suc', 'Successfully Register, Check your email to activate your account!');
					$this->load->view('login');
					$this->load->view('footer');
				}
			}
		}else{
			$this->load->view('register-admin');
			$this->load->view('footer');
		}
	}

	public function login(){
		if ($this->input->post()) {
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');	
			if ($this->form_validation->run() == false) {
				// set the validation errors in flashdata (one time session)
				$this->session->set_flashdata('errors', validation_errors());
				$this->load->view('login');
				$this->load->view('footer');						
			}else{
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
        //send the email pass to query if the user is present or not
				$data = $this->User_model->checkLogin($email, $password);
        //if the result is query result is 1 then valid user
				if($data){
					$usersession = array(
						'surname' => $data[0]->surname,
						'email' => $data[0]->email,
						'firstname' => $data[0]->firstname,
						'type' => $data[0]->type,
						'id' => $data[0]->id,
						'phone' => $data[0]->phone,
						'role' => $data[0]->role,
						'status' => $data[0]->status,
						'gender' => $data[0]->gender,
						'todos' => $data[0]->no_of_todo,
					);
					$this->session->set_userdata('logged_in', $usersession);
					$activate = $data[0]->activate;
					$type = $data[0]->type;
					if ($activate == 0) {
						$this->session->set_userdata('surname',$data[0]->surname);
						$this->session->set_userdata('firstname',$data[0]->firstname);
						$this->session->set_userdata('type',$data[0]->type);						
						$this->session->set_userdata('email',$data[0]->email);						
						$this->load->view('activate');
						$this->load->view('footer');
					}else{
						if($type == "user"){
							redirect(base_url('dashboard'));
						}else if ($type == "admin"){
							redirect(base_url('admin'));
						}
					}
				}else{
					$this->session->set_flashdata('errors','invalid username or password');
					$this->load->view('login');
					$this->load->view('footer');					
				}		
			}
		}else{
			$this->load->view('login');
			$this->load->view('footer');
		}
	}

	public function admin(){
		$this->load->view('admin/header');
		$this->load->view('admin/index');
	}

	public function todos(){
		$this->load->view('admin/header');
		$this->load->view('admin/todo');
		$this->load->view('footer');
	}

	public function dashboard(){	
		$this->load->view('user/dashboard');
		$this->load->view('footer');
	}

	public function resend(){
		$email = $this->input->post('email');
		$firstname= $this->input->post('firstname');
		$code = md5($email);
    	$insert_data = $this->User_model->reactivation($email, $code); //get the hash value which belongs to given email from database
    	if ($insert_data) {
          // verification email sent to users email
    		$tag="a mail system from dev docket";
    		$replyto ="admi@devdocket.ng";
	          // verification email sent to users email
    		$subject1="Activation Link";
    		$message="
    		<html>
    		<head>
    		<title>Verification Code</title>
    		</head>
    		<body>
    		<p>Please click the link below to activate your account.</p>
    		<p> ".base_url()."welcome/activate/".$firstname."/". $code."</p>
    		<p> please note that if you did not comfirm your email address you cannot signing </p>
    		<p>Thank You!</P>
    		</body>
    		</html>
    		";
    		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    		curl_setopt($ch, CURLOPT_USERPWD,'api:key-'. MAILGUN_API_KEY);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    		curl_setopt($ch, CURLOPT_URL, 
    			'https://api.mailgun.net/v2/www.esoftchurch.com/messages');
    		curl_setopt($ch, CURLOPT_POSTFIELDS, 
    			array('from' => 'Mapoly Nacoss Treasury System System <admin@softchurch.com>',
    				'to' => $firstname.' <'.$email.'>',
    				'subject' => $subject1,
    				'html' => $message,
    				'text' => $message,
    				'o:tracking'=>'yes',
    				'o:tracking-clicks'=>'yes',
    				'o:tracking-opens'=>'yes',
    				'o:tag'=>$tag,
    				'h:Reply-To'=>$replyto));
    		$result = curl_exec($ch);
    		curl_close($ch);
    		$this->session->set_flashdata('suc', 'link has been sent please check your email');
    		$this->load->view('login');
    		$this->load->view('footer');
    	}   
    }

    public function activate(){
    	$email =  $this->uri->segment(3);
    	$code = $this->uri->segment(4);
    	$result = $this->User_model->verify($email, $code); //get the hash value which belongs to given email from database
    	if($result){ 
    		$this->session->set_flashdata('suc', 'Activated Successfully, Login now!');
    		$this->load->view('login');
    		$this->load->view('footer');
    	}else{
    		$this->session->set_flashdata('errors', 'The link has currupted please request for new activation link ');
    		$this->load->view('login');
    		$this->load->view('footer');
    	}
    }

    public function logout()
    {
    	$user_data = $this->session->all_userdata();
    	foreach ($user_data as $key => $value) {
    		if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
    			$this->session->unset_userdata($key);
    		}
    	}
    	$this->session->sess_destroy();
    	$this->session->set_flashdata('suc', 'you have logged out');
    	$this->load->view('login');
    	$this->load->view('footer');
    }

    public function edit($id)
    {
    	$data =  $this->User_model->getuserbyid($id);	
    	$this->session->set_flashdata('suc', 'you can edit here');
    	$this->session->set_userdata('email',$data['email']);
    	$this->session->set_userdata('surname',$data['surname']);
    	$this->session->set_userdata('firstname',$data['firstname']);
    	$this->session->set_userdata('type',$data['type']);
    	$this->session->set_userdata('id',$data['id']);
    	$this->session->set_userdata('phone',$data['phone']);
    	$this->session->set_userdata('gender',$data['gender']);
    	$this->session->set_userdata('role',$data['role']);
    	$this->load->view('user/edit');
    	$this->load->view('footer');
    }

    public function update()
    {
    	$this->form_validation->set_rules('firstname', 'firstname', 'required');
    	$this->form_validation->set_rules('surname', 'surname', 'required');
    	$this->form_validation->set_rules('email', 'email', 'required');
    	$this->form_validation->set_rules('phone', 'phone', 'required');
    	$this->form_validation->set_rules('gender', 'gender', 'required');
    	$this->form_validation->set_rules('role', 'role', 'required');
    	if ($this->form_validation->run() == FALSE){
    		$this->session->set_flashdata('errors', validation_errors());
    		$this->load->view('user/edit');
    		$this->load->view('footer');
    	}else{
    		$id = $this->input->post('id');
    		$data = array(
    			'firstname' =>$this->input->post('firstname'),
    			'surname' =>$this->input->post('surname'),
    			'email' =>$this->input->post('email'),
    			'phone' =>$this->input->post('phone'),
    			'gender' =>$this->input->post('gender'),
    			'role' =>$this->input->post('role')
    		);
    		$result = $this->User_model->updated($id, $data);
    		if ($result) {
    			$email = $this->input->post('email');
    			$data = $this->User_model->selcet_from_edit($email);	
    			$usersession = array(
						'surname' => $data[0]->surname,
						'email' => $data[0]->email,
						'firstname' => $data[0]->firstname,
						'type' => $data[0]->type,
						'id' => $data[0]->id,
						'phone' => $data[0]->phone,
						'role' => $data[0]->role,
						'status' => $data[0]->status,
						'gender' => $data[0]->gender,
						'todos' => $data[0]->no_of_todo,
					);
					$this->session->set_userdata('logged_in', $usersession);		    			
    			$this->session->set_flashdata('suc', 'profile updated Successfully');    			
    			$this->load->view('user/dashboard');
    			$this->load->view('footer');
    		}
    		else{
    			$this->session->set_flashdata('error', 'error in updating please try again');
    			$this->load->view('user/dashboard');
    			$this->load->view('footer');
    		}
    	}
    }


}
