<!DOCTYPE html>
<html lang="en"
      dir="ltr">
 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link rel="icon" href="<?php echo base_url();?>images\demo\tiranga.jpg">
         
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="<?php echo base_url();?>assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="<?php echo base_url();?>assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="<?php echo base_url();?>assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?php echo base_url();?>assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?php echo base_url();?>assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class="login">

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="<?php echo base_url();?>assets/images/logo/primary.svg"
                             class="avatar-img rounded-circle"
                             alt="vidhyarthi_login" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="<?php echo base_url();?>index.php" class="navbar-brand m-0">Vidyarthi</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Faculty Login</h4>
                        <p class="card-subtitle">Access your account</p> 
                    </div> 
                    <?php
        if($error=$this->session->flashdata('Login_failed')):  ?>
        <div class="row">
          <div class="col-lg-8 mx-auto mt-1">
            <div class="alert alert-danger">
              <?= $error;?>
            </div>
          </div>
        </div>
        <?php endif; ?>
    
        <?php
        if($data=$this->session->flashdata('data')):  ?>
        <div class="row">
          <div class="col-lg-8 mx-auto mt-1">
            <div class="alert alert-success">
              <?= $data;?>
            </div>
          </div>
        </div>
        <?php endif; ?>
    <?php echo form_open('Welcome/facultyLogin'); ?>
                    <div class="card-body"> 

                         
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Your email address</label>
                                <div class="input-group input-group-merge">
                                <?php  echo form_input(['class'=>'form-control form-control-prepended','placeholder'=>'Your email address','name'=>'uname','value'=>set_value("uname"),'id'=>'email','type'=>'email']);   ?>
                                    
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-7" style="color:red; margin-top:10px">
    <?php echo form_error('uname'); ?>
</div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Your password</label>
                                <div class="input-group input-group-merge">
                                <?php echo form_password(['class'=>'form-control form-control-prepended','type'=>'password','placeholder'=>'Your password','name'=>'pass', 'value'=>set_value("pass"),'id'=>'password' ]);?>

                                     
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-7 " style="color:red; margin-top:10px">
                                        <?php echo form_error('pass');         ?>
                                    </div>
                            </div>
                            <div class="form-group ">
                                        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Login']);   ?>
                            </div>
                            <div class="text-center">
                                <a href=" #"
                                   class="text-black-70"
                                   style="text-decoration: underline;">Forgot Password?</a>
                            </div>
                        </form> 
                        <div class="container">
                   
                   
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/vendor/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="<?php echo base_url();?>assets/vendor/dom-factory.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="<?php echo base_url();?>assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="<?php echo base_url();?>assets/js/app-settings.js"></script>

    </body>
 
</html>