<?php

/**
 * 
 */
class Auth_model extends CI_Model
{
	
	public function signup($data)
	 {
	  $this->db->insert('users', $data);
	  return $this->db->insert_id();
	 }

function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'NO');
  $query = $this->db->get('users');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('users', $data);
   return true;
  }
  else
  {
   return false;
  }
 }



public function login($email,$password)
  {
    
    $user=$this->db->where(['email'=>$email,'password'=>$password])
              ->get('users');
              
    if($user->num_rows())
    {

      return $user->row()->id;
    }
    else{
      return false;

    }
  }

public function getuser()
  {
      $userdata=  $this->db->get('users');
      return $userdata->result();
  }

public function addblog($post)
{
    return $this->db->insert('blog',$post); 
}

public function getblog()
  {
      $userdata=  $this->db->get('blog');
      return $userdata->result();
  }

















 
}

?>