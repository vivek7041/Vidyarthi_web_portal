<!DOCTYPE html>
<html lang="en"  dir="ltr">  
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
            <?php include 'header1.php'?> 
                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page "> 
                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Faculty Dashboard</li>
                            </ol>
                            <h1 class="h2">Faculty Dashboard</h1>  
                            <div class="row">
                                <div class="col-lg-7"> 
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3 text-primary">>></div>
                                            <div class="flex">
                                                <h4 class="card-title">Recent Activity/Events</h4>
                                                <p class="card-subtitle">State or National level</p>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#"
                                                   class="dropdown-toggle text-black-70"
                                                   data-toggle="dropdown">Sort by</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="<?=base_url()?>index.php/Welcome/sort"
                                                       class="dropdown-item">By name</a>
                                                    <a href="<?=base_url()?>index.php/Welcome/sortAOI"
                                                       class="dropdown-item">By AOI</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart"
                                                 style="height: 500px;">
                                         <table>        

                                                 <?php  $org=(array) $data;
                                                 $cnt=1;
                                                        foreach($data as $row): ?>

                                                    <tr>  
                                                        <tr><td><?=$cnt;
                                                        $cnt++
                                                        ?></td></tr>
                                                        <td>
                                                            <b>Event name:</b>
                                                            <?php   
                                                     echo $row->name;?>
                                                     </td>  </tr>
                                                     <tr>
                                                        <td><b>Category:</b><?php
                                                     echo $row->category;?>
                                                     </td>  
                                                       <td> <b>Event description:</b><?php
                                                     echo $row->about; 	 
                                                     ?> </td> 
                                                     
                                                       <td style="float: right;margin:30px;">
                                                        </td>
                                                    </tr> 
                                                    <?php
                                                       endforeach;  ?>  
                                                    </table>
                                                        <a class="btn btn-success" href="<?=base_url()?>index.php/Welcome/AddEvent" >
                                                            Add Events
                                                    </a>
         
                                      
                                            </div>
                                        </div>
                                    </div>
 
                                   
                                </div>
                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="h2 mb-0 mr-3 text-primary">>></div>
                                            <div class="flex">
                                                <h4 class="card-title">Upcoming Events</h4>
                                                <p class="card-subtitle">State or National level</p>
                                            </div>
                                            <i class="material-icons text-muted ml-2">events</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart"
                                                 style="height: 154px;">
                                                No upcoming events are available.
                                            </div>
                                        </div>
                                    </div>

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
                    <?php include 'sidebarfaculty.php'?>
                    
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