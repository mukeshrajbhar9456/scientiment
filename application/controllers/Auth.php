<?php 

/**
 * 
 */
class Auth extends CI_Controller
{
	 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('Admin/welcome');
  }
$this->load->model('dynamic_dependent_model');
  $this->load->model('Auth_model');
 }

//state and city controller

	public function Regester()
	{
		$data['state'] = $this->dynamic_dependent_model->fetch_state();
		$this->load->view('Regester', $data);
	}

	function fetch_city()
	 {
	  if($this->input->post('state_id'))
	  {
	   echo $this->dynamic_dependent_model->fetch_city($this->input->post('state_id'));
	  }
	 }

	public function Submit_regester()
{
  $this->form_validation->set_rules('name', 'Name', 'required|trim');
  $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|exact_length[10]');
  $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
  $this->form_validation->set_rules('state', 'State', 'required|trim');
  $this->form_validation->set_rules('city', 'City', 'required|trim');
  $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
  $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   $data = array(
    'name'  => $this->input->post('name'),
    'mobile'  => $this->input->post('mobile'),
    'email'  => $this->input->post('email'),
    'state'  => $this->input->post('state'),
    'city'  => $this->input->post('city'),
    'password' => md5($this->input->post('password')),
    'verification_key' => $verification_key
   );
   $id = $this->Auth_model->signup($data);
   if($id > 0)
   {
    $subject = "Please verify email for login";
    $message = "
    <p>Hi ".$this->input->post('name')."</p>
    <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."Auth/verify_email/".$verification_key."'>link</a>.</p>
    <p>Once you click this link your email will be verified and you can login into system.</p>
    <p>Thanks,</p>
    ";
    $config = array(
     'protocol'  => 'smtp',
     'smtp_host' => 'ssl://smtp.googlemail.com',
     'smtp_port' => 465,
     'smtp_user'  => 'mukeshrajbhar9456@gmail.com', 
     'smtp_pass'  => 'mk@667788', 
     'mailtype'  => 'html',
     'charset'    => 'iso-8859-1',
     'wordwrap'   => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('mukeshrajbhar9456@gmail.com');
    $this->email->to($this->input->post('email'));
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send())
    {
     $this->session->set_flashdata('message', 'Check in your email for email verification mail');
     redirect('Auth/Regester');
    }
   }
  }
  else
  {
   $this->Regester();
  }
 }

 function verify_email()
 {
  if($this->uri->segment(3))
  {
   $verification_key = $this->uri->segment(3);
   if($this->Auth_model->verify_email($verification_key))
   {
    $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
   }
   else
   {
    $data['message'] = '<h1 align="center">Invalid Link</h1>';
   }
   $this->load->view('email_verification', $data);
  }
 }



 public function Login()
 {
 	$this->load->view('login');
 }

public function Submit_login()
{
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


	if($this->form_validation->run())
		 {

		  $email= $this->input->post('email');
		 $password= md5($this->input->post('password'));
		 $id=$this->Auth_model->login($email, $password);
		if($id){

			$this->session->set_userdata('id',$id);
			return redirect('Admin/welcome');
		
		}
		else
		{
			$this->session->set_flashdata('loginfail','Invalid Email/Password');
			return redirect('Auth/login');
		}
		
		 }
		 else{
		 	
		 	$this->load->view('login');
		 }

}


}




?>