<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head> 
<title>Event details</title>
      <?php include 'header1.php'; ?> 
      <style>
         #btnspc:hover{
              color:white;
          }
      </style>
</head> 
    <body> 
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
                <div data-push
                     data-responsive-width="900px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">
                        <div class="container page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li> 
                                        <li class="breadcrumb-item active">Event details</li>
                                    </ol>
                                    <h1 class="h2">Event details</h1>

                                    <div class="card-rows">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4 class="card-title mb-0"><?php   echo $sql->name;?> </h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>  
                 <center>
                 <img src="<?php echo $sql->image_path;?>" alt="No images are available"  style="width:50%;margin-top:10px;" >    
                  </center>  
                 <hr>
                                    <div class="card-body" style="font-size:18px">
                                        <small class="text-muted">ADVANCED</small><br> 
                                        <b>Category: </b><?php   echo $sql->category;?>
                                     <br>     <b>Description:</b> <?php  echo $sql->about;  ?> <br>
                                        
                                      <span style="float:inline-end;margin-bottom:50px;">  <?=//form_open('Welcome/register_contest'), form_hidden('id', $row->id),
                                    form_submit(['name'=>'submit','value'=>'Participate','class'=>'btn btn-outline-success','id'=>'btnspc']),
                                    form_close(); ?></span>
                                    <br><br>
                                        <span class="badge badge-primary" style="text-transform: uppercase;font-size:14px">event</span>
                                    
                                </div></div> 
                                   
                        </div></div></div>
                        </div></div>
                    <?php include 'sidebar.php';?>
                </div>
            </div> 
        </div>
        <!-- jQuery -->
        <script src="<?= base_url()?>assets1/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        
        <script src="<?= base_url()?>assets1/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?= base_url()?>assets1/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="<?= base_url()?>assets1/vendor/dom-factory.js"></script>
        <script src="<?= base_url()?>assets1/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?= base_url()?>assets1/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="<?= base_url()?>assets1/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="<?= base_url()?>assets1/js/app-settings.js"></script>
 
    </body>
</html>