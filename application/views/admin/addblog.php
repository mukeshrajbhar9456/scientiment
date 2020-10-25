<!DOCTYPE html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blog</title>
      <link href="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
      <link href="<?php echo base_url(); ?>assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="<?php echo base_url(); ?>assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="<?php echo base_url(); ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="<?php echo base_url(); ?>assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">

      
      <!-- Emojionearea -->
      <link href="<?php echo base_url(); ?>assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="<?php echo base_url(); ?>assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
     
      <!-- Theme style -->
      <link href="<?php echo base_url(); ?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
        <!------include header----------------->
      <?php include('header.php'); ?>
         <!--side bar column. contains the sidebar -->
        <?php include('sidebar.php'); ?>
         <!-- Content Wrapper. Contains page content -->
        

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Blog</h1>
                 
               </div>
            </section>
            <!-- Main content -->

            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           
                              <div class="btn-group"> 
                              <a class="btn btn-add " href="<?php echo base_url()?>Admin/addblog"> 
                              <i class="fa fa-plus"></i> Add Blog</a>  
                           </div>
                        </div>

                        <?php if($success = $this->session->flashdata('success')): ?>

                           <div class="alert alert-success"><?php echo $success ?></div>

                           <?php endif; ?>

                           <?php if($msg = $this->session->flashdata('msg')): ?>

                           <div class="alert alert-danger"><?php echo $msg ?></div>

                           <?php endif; ?>
                        <div class="panel-body">

                          <div class="panel-body">
                           <?php echo form_open_multipart('admin/submitblog'); ?>
                              <div class="form-group">
                                 <label>title</label>
                                 
                                 <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Title','name'=>'title','value'=>set_value('title')]); ?>

                                  <?php  echo form_error('title');  ?>
                              </div>

                              <div class="form-group">
                                 <label>Discription</label>
                                <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Discription','name'=>'disc','value'=>set_value('disc')]); ?>

                                 <?php  echo form_error('disc');  ?>
                              </div>
                              
                              
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <?php  echo form_upload(['name'=>'userfile']); ?>

                                  <?php if(isset($upload_error)) { echo $upload_error;  }  ?>
                              </div>
                              
                            

                             <div class="reset-button">
                                 <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Submit']);  ?>
                                 <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-warning','value'=>'Reset']);  ?>
                                 
                              </div> 
                             
                          
                        </div>

                              
                           
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>


            
         </div>
       

            
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2020-2021 <a href="#">LMS</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
      <!-- lobipanel -->
      <script src="<?php echo base_url(); ?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="<?php echo base_url(); ?>assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="<?php echo base_url(); ?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="<?php echo base_url(); ?>assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="<?php echo base_url(); ?>assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      
      <!-- Dashboard js -->
      <script src="<?php echo base_url(); ?>assets/dist/js/dashboard.js" type="text/javascript"></script>


      <script type="text/javascript">
         $(document).ready(function() {
    $('#example').DataTable();
} );
      </script>
      
      
   </body>


</html>

