<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:10:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Regester</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
         <!-- Pe-icon-7-stroke -->
        <link href="<?php echo base_url()?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?php echo base_url()?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center md">
                          <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
             <div class="login-area">

                <div class="panel panel-bd panel-custom">


                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                                                <div class="header-title">
                                <h3>Register</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                             <?php echo form_open('Auth/Submit_regester'); ?>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name</label>
                                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Name','name'=>'name','value'=>set_value('name')]); ?>
                                   <?php echo form_error('name'); ?>

                                </div>

                                 

                                <div class="form-group col-lg-12">
                                    <label>Mobile</label>
                                    
                                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Mobile','name'=>'mobile','value'=>set_value('mobile')]); ?>
                                <?php echo form_error('mobile'); ?>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                            <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]); ?>
                            <?php echo form_error('email'); ?>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label>Select State</label>
                           <select name="state" id="state" class="form-control">
                            <option value="">Select state</option>
                            <?php echo form_error('state'); ?>
                            <?php
                            foreach($state as $row)
                            {
                             echo '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
                            }
                            ?>
                           </select>
                          </div>


                         <div class="form-group col-lg-12">
                            <label>Select City</label>
                       <select name="city" id="city" class="form-control">
                        <option value="">Select city</option>
                         <?php echo form_error('city'); ?>
                       </select>
                      </div>

                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
                                  <?php echo form_error('password'); ?>  
                                </div>
                                
                            </div>
                            <div>
                                <button class="btn btn-warning">Register</button>
                                <a class="btn btn-add" href="<?php echo base_url()?>Auth/Login">Login</a>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<script>
$(document).ready(function(){
 $('#state').change(function(){
  var state_id = $('#state').val();
  
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Auth/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
     // $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select city</option>');
  }
 });
 
});
</script>

<script type="text/javascript">
         $(document).ready(function()
        { 
       $(document).bind("contextmenu",function(e){
              return false;
       }); 
        })
        </script>
        
    </body>
</html>