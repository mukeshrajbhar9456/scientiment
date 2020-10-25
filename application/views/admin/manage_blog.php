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

                           <div class="alert alert-success"><?php echo $msg ?></div>

                           <?php endif; ?>
                        <div class="panel-body">
                           
         <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>SN</th>
                <th>Image</th>
                <th>Title</th>
                <th>Discription</th>
                
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($newuser as $newuser): ?>

            <tr>
               
               <td><?php echo $newuser->id;  ?></td>
                <!-- <td><?php echo $newuser->image_path;  ?></td> -->


                
          <!-- <?php if(!is_null($newuser->image_path)) { ?>
        <td><img src="<?php echo $newuser->image_path ?>" alt="" width="280" height="200"></td>
        <?php } ?> -->

        <td style="height: 100px; width: 100px;"><a href="#"><img class="card-img-top" src="<?php echo $newuser->image_path ?>" width="90" alt="logo" ></a></td>



               <td><?php echo $newuser->title;  ?></td>
               <td><?php echo $newuser->disc;  ?></td>
              
              
               
               
               <td><?=  anchor("page/edituser/{$newuser->id}",'<i class="fa fa-pencil"></i>',['class'=>'btn btn-add btn-sm']);  ?>

               <?=  anchor("page/delete_user/{$newuser->id}",'<i class="fa fa-trash-o"></i>',['class'=>'btn btn-danger btn-sm']);  ?></td>
            </tr>
            
            <?php endforeach; ?> 
            
        </tbody>
        <tfoot>
            <tr>
                <th>SN</th>
                <th>Image</th>
                <th>Title</th>
                <th>Discription</th>
                
                <th>Action</th>
            </tr>
        </tfoot>
    </table>              
                           
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

