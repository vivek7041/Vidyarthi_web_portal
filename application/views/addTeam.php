<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
<title>Add Team Members</title>
      <?php include 'header1.php'; ?>
      
</head> 
    <body> 
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page "> 
                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li>
                                        <li class="breadcrumb-item active">Add team members</li>
                                    </ol>
                                    <h1 class="h2">Add Team Members</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group"> 
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                            <?php echo form_open('Welcome/addTeam'); ?>
                                                <div role="group"
                                                     aria-labelledby="label-profilename"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-profilename"
                                                               for="profilename"
                                                               class="col-md-3 col-form-label form-label">Member name</label>
                                                        <div class="col-md-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge">
                                                                      
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Alan Ware', 'name' => 'name', 'value' => set_value("name")]);   ?>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mx-auto" style="color:red;  margin-top:10px">
                                        <?php echo form_error('name');     ?>
                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                              
                   
                                                <div class="list-group-item">
                                            <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label">Email address</label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center" >
                            <?php echo form_input(['class' => 'form-control mx-auto mt-auto', 'placeholder' => 'Your email address', 'name' => 'email', 'value' => set_value("email")]);   ?>
                                                            </div>     

                                                        </div>
                                                        <div class="col-lg-6 mx-auto" style="color:red;  margin-top:10px">
                                        <?php echo form_error('email');     ?>
                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="list-group-item">
                                            <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label">Mobile number</label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center" >
                                                                 
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'e.g.+0-000-0000-000', 'name' => 'mobile', 'value' => set_value("mobile")]);   ?>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mx-auto" style="color:red;  margin-top:10px">
                                        <?php echo form_error('mobile');     ?>
                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                            <div class="list-group-item">
                                                <fieldset role="group"
                                                          aria-labelledby="legend-display_realname"
                                                          aria-describedby="description-display_realname"
                                                          class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="legend-display_realname"
                                                               for="display_realname"
                                                               class="col-md-3 col-form-label form-label">Privacy</label>
                                                        <div role="group"
                                                             aria-labelledby="legend-display_realname"
                                                             class="col-md-9">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input id="display_realname"
                                                                       type="checkbox"
                                                                       class="custom-control-input"
                                                                       checked="">
                                                                <label for="display_realname"
                                                                       class="custom-control-label">Share your personal data with other platforms too. </label>
                                                            </div>
                                                            <small id="description-display_realname"
                                                                   class="form-text text-muted">If unchecked, your data will not be shared for any others platforms including goverment bodies too.</small>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="list-group-item">
                                                <fieldset role="group"
                                                          aria-describedby="description-public_profile"
                                                          class="m-0 form-group">
                                                    <div class="form-row">
                                                        <div class="col-md-3"></div>
                                                         
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <li class="nav-item">
                                                <a href="<?= base_url()?>index.php/Welcome/createTeam"
                                                       class="nav-link ">Basic Information</a>
                                                    
                                                </li>
                                                <li class="nav-item">
                                                <a href="#"
                                                       class="nav-link active">Add Team members</a>
                                                </li>
                                            </ul>
                                            <div class="container "> 
                                            <button type="submit" class="btn btn-success btn-block">Add member</button>
                                            </div>
                                        </div>
                                    </div> 
                            
                                    <?php  if($msg=$this->session->flashdata('msg')):  
                                         $data_class=$this->session->flashdata('dc');   ?>
        <div class="row" style="margin-left:30px" >
          <div class="col-lg-11 mt-1">
            <div class="alert <?=$data_class ?>">
              <?php echo $msg; ?>
            </div>
          </div>
        </div> 
        <?php endif; ?>
                                </div>
                                
                            </div>

                            
                        </div>
                  
                    </div>


                    <?php include 'sidebar.php';?>
                </div>

        <!-- App Settings FAB -->
               

            </div>
        </div>

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

        <!-- App Settings (safe to remove) -->
        <script src="<?= base_url()?>assets1/js/app-settings.js"></script>

        <script>
            function f1(){
                alert("Deleted Successfully!");
            }
        </script>
    </body>
</html>