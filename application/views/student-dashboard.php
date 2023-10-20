<!DOCTYPE html>
<html lang="en"  dir="ltr">  
    <style>
        #viewall:hover{
            color:white;
        }
    </style>
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
            <?php include 'header1.php'?> 
                <div data-push class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page "> 
                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <h1 class="h2">Dashboard</h1>  
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3 text-primary">>></div>
                                            <div class="flex">
                                                <h4 class="card-title">Recent Activity/Events</h4>
                                                <p class="card-subtitle">State or National level</p>
                                            </div>
                                            <div class="dropdown">
                              <a href="<?php echo base_url()?>Welcome/participation" id="viewall" class="btn btn-outline-success">View all</a>
                                            </div>
                                        </div>
                                        <div class="card-body" style="font-size: 17px;">
                                            <div class="chart"
                                                 style="height: 200px;">
                                                 <table class="table ">
                                                 <?php   if(count($articles)):
        $count=$this->uri->segment(3);
    
        foreach($articles as $row): ?>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?= ++$count.'.';  ?></td>
      <td>
            <b>Event name:</b>
            <?php   
     echo $row->name;?>
     </td>
     <td><b>Category:</b><?php
     echo $row->category;?>
     </td> 
     
     <td> <b>Event description:</b><?php
     echo $row->about; 	 
     ?> </td> 
    </tr>
     
  </tbody> <?php
      endforeach;  
    endif;
      ?> 
</table> 
                                            </div>
                                          <?= $this->pagination->create_links();?>  
                                           
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Team Details</h4>
                                                    <p class="card-subtitle">Your team details</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-outline-primary"
                                                       href="manageTeam">Manage</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit"
                                            style="z-index: initial;">
                                            <div class="chart"
                                                 style="height:auto;"> 
                                                 <?php   $teammember=0;  foreach($var as $row): ?> 
                                            </div> 
                                            <li class="list-group-item"
                                                style="z-index: initial;">
                                                <div class="d-flex align-items-center">
                                                <?= ++$teammember.'.';  ?>
                                    <img src="<?php echo $row->image_path;?>" alt="No image" class="avatar-img rounded avatar avatar-4by3 avatar-sm " style="margin: 10px;" >
                                                    <div class="flex"  style="margin: 10px;">
                                                        <a href="#" class="text-body" style="font-size:15px;"><strong> <?php echo $row->memberName;?></strong></a>
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted ml-2"><?= $row->memberEmail;?></small>
                                                        </div>  
                                                    </div>
                                                    <div class="dropdown ml-3">
                                                        <a href="#"
                                                           class="dropdown-toggle text-muted"
                                                           data-caret="false"
                                                           data-toggle="dropdown">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                               href="#">Message</a>
                                                        </div>
                                                    </div><?php endforeach;     ?> 
                                                </div>
                                            </li>
                                        </ul>
                                    </div> 
                                   
                                </div>
                                <div class="col-lg-10">
                                    <div class="card card-2by1">
                                        <div class="card-header">
                                            <h4 class="card-title">Rewards</h4>
                                            <p class="card-subtitle">Your latest achievements</p>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
                                            <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
                                            <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
                                            <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
                                            <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php include 'sidebar.php'?>
                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>

      
        
        <!-- jQuery -->
        <script src="<?=base_url()?>assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?=base_url()?>assets/vendor/popper.min.js"></script>
        <script src="<?=base_url()?>assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?=base_url()?>assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="<?=base_url()?>assets/vendor/dom-factory.js"></script>
        <script src="<?=base_url()?>assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?=base_url()?>assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="<?=base_url()?>assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="<?=base_url()?>assets/js/app-settings.js"></script>

        <!-- Nestable -->
        <script src="<?=base_url()?>assets/vendor/jquery.nestable.js"></script>
        <script src="<?=base_url()?>assets/js/nestable.js"></script>

        <!-- Quill -->
        <script src="<?=base_url()?>assets/vendor/quill.min.js"></script>
        <script src="<?=base_url()?>assets/js/quill.js"></script>

        <!-- Flatpickr -->
        <script src="<?=base_url()?>assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="<?=base_url()?>assets/js/flatpickr.js"></script>

   </body>
 
</html>