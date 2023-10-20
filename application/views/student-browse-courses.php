<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head> 
<title>Browse events</title>
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
                    <div class="mdk-drawer-layout__content page "  >
                        <div class="container page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li> 
                                        <li class="breadcrumb-item active">Browse events/competitions</li>
                                    </ol>
                                    <h1 class="h2">Browse events/competitions</h1>
                                    <?php $count=0; foreach($data as $row):   ?>
                                   
      
                            <div class="card-rows">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h4 class="card-title mb-0"><?php echo ++$count."."; ?> <?php   echo $row->name;?> </h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>  
                      
                 <center>
                 <img src="<?php echo $row->image_path;?>" alt="No images are available"  style="width:50%;margin-top:10px;" >    
                  </center>  
                 <hr>
                                    <div class="card-body" style="font-size:18px">
                                    <div class="row">
                                    <div class="col-lg-3">
                                        <small class="text-muted">ADVANCED</small><br> 
                                        <b>Category: </b><?php   echo $row->category;?></div>
                                        <div class="col-lg-6"> <br> <b>Description:</b> <?php  echo $row->about;  ?> <br> </div>
                                        <div class="col-lg-3" style="margin-top:10px;display:flex;display: flex;flex-grow: initial;gap:1em;"> <?=form_open('Welcome/register_contest'), form_hidden('id', $row->id),
                                    form_submit(['name'=>'submit','value'=>'Participate','class'=>'btn btn-outline-success','id'=>'btnspc']),
                                    form_close(); ?>
                                     <?=form_open('Welcome/event_complete_details'), form_hidden('event_name', $row->name),
                                    form_submit(['name'=>'submit','value'=>'More details','class'=>'btn btn-outline-warning','id'=>'btnspc']),
                                    form_close(); $row->id; ?></div></div>
                                    <br><br>
                                        <span class="badge badge-primary" style="text-transform: uppercase;font-size:14px">event</span>
                                    </div> 
                                </div></div> <?php   endforeach;  ?>     
                            </div>  
                        </div>
                        </div>
                    </div> 
                    <?php include 'sidebar.php';?>
                </div>
            </div> 
        </div>
        <script>

function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
     
</script>
        <!-- jQuery -->
        <script src="<?= base_url()?>assets1/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?= base_url()?>assets11/vendor/popper.min.js"></script>
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
 
 
    </body>
</html>