<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title>Create Team</title>
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
                                        <li class="breadcrumb-item active">Create Team</li>
                                    </ol>
                                    <h1 class="h2">Create Team</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="list-group-item">   
                                            <?php echo form_open('Welcome/createTeam'); ?>

                                            <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group">
                                                       

                                                    <div class="form-row"> 
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label"></label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-profilename"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-profilename"
                                                               for="profilename"
                                                               class="col-md-3 col-form-label form-label">Team name</label>
                                                        <div class="col-md-9">
                                                            <div role="group"
                                                                 class="input-group input-group">
                                                                 <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'e.g.A1 developers', 'name' => 'name', 'value' => set_value("name")]); ?>
                                                            </div>

                                                            <small id="description-profilename"
                                                                   class="form-text text-muted">Your Team name will be used as part of your public identity.</small>
                                                                   <div style="color:red;margin-bottom:0px;padding-bottom:0px"><?php  echo form_error('name'); ?></div>       
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                            <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label">Enter number of members in a team</label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center" style="margin-top: 10px;">
                                                            <?php echo form_input(['class' => 'form-control mx-auto mt-auto', 'placeholder' => ' e.g.1,2,3...', 'name' => 'teamSize', 'value' => set_value("teamSize"),'type'=>'number']);   ?>
                                                               
                                                            </div>
                                                            
                                                            <small  class="form-text text-muted">Team size will be min 2 or max 10</small>
                                                            <div style="color:red;margin-bottom:0px;padding-bottom:0px"><?php  echo form_error('teamSize'); ?></div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-about"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-about"
                                                               for="about"
                                                               class="col-md-3 col-form-label form-label">About your team</label>
                                                        <div class="col-md-9">
                                                        <?php echo form_textarea(['class' => 'form-control', 'placeholder' => 'About you team in short.', 'name' => 'teamDescription', 'value' => set_value("teamDescription"),'rows'=>'3']);   ?>
                                                          
                                                        </div>

                                                        <?php
                                                         $id=$this->session->userdata('id');
                                                        echo form_input(['value'=>$id,'type'=>'hidden','name'=>'loginId']);?>
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
                                                                       class="custom-control-label">Display your real name on your profile</label>
                                                            </div>
                                                            <small id="description-display_realname"
                                                                   class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
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
                                                <a href="#"
                                                       class="nav-link active">Basic Information</a>
                                                    
                                                </li>
                                                <li class="nav-item">
                                                <a href="<?= base_url()?>index.php/Welcome/addTeam"
                                                       class="nav-link">Add Team members</a>
                                                </li>
                                            </ul>
                                            <div class="page-nav__content">

                                            <button class="btn btn-success">Save Changes</button>
                                            </div>
                                           </form>
                                        </div>
                                    </div><br>
                                    <?php $meta_class= $this->session->userdata('meta_class');?>
                                    <div class="container">
          <div class="col-lg-10 m-0">
            <div class="alert <?= $meta_class ?>">
                                    <?php
                                                         $meta=$this->session->userdata('meta'); 
                                                         echo $meta;
                                                        ?></div></div>
                                                        
                                                        </div>
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
        <script src="<?= base_url()?>assets1/vendor/popper.min.js"></script>
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