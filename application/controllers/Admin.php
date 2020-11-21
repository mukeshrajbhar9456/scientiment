<?php 

class Admin extends CI_Controller
{

		 public function __construct()
 {
  parent::__construct();
  

   if( ! $this->session->userdata('id') )
    return redirect('Auth/login');
 $this->load->model('Auth_model');
 }
	
	public function welcome()
	{
		$this->load->view('admin/welcome');
	}

	public function new_user()
	{
		
		$newuser= $this->Auth_model->getuser();
		$this->load->view('admin/manage_user',['newuser'=>$newuser]);
	}


	public function blog()
	{
	
		$newuser= $this->Auth_model->getblog();
		$this->load->view('admin/manage_blog',['newuser'=>$newuser]);
	}

	public function addblog()
	{

		$this->load->view('admin/addblog');
	}

	 public function submitblog()
  {
   $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('disc','Discription','required');

        $config=[
        'upload_path'=>'./upload/',
        'allowed_types'=>'gif|jpg|png|jpeg',

        ];

        $this->load->library('upload',$config);
   
     $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    if($this->form_validation->run() && $this->upload->do_upload())
    {
      $post=$this->input->post();

      $data=$this->upload->data();

   

      $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);

     
        $post['image_path']=$image_path;
      
      
      if($this->Auth_model->addblog($post))
      {
        $this->session->set_flashdata('msg','Blog added successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else{
        $this->session->set_flashdata('msg','Blog not added Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }

       return redirect('Admin/blog');

    }else{
       $upload_error=$this->upload->display_errors();

  $this->load->view('Admin/addblog',compact('upload_error'));

    }
    
  }



  public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('Auth/Login');
  }



}


?>