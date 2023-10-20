<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Faculty Signup</title>
    <link rel="icon" href="<?php echo base_url(); ?>images\demo\tiranga.jpg">


    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">

</head>

<body class="login">

    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-6 mx-auto" style="min-width: 300px;">
            <div class="text-center mt-5 mb-1">
                <div class="avatar avatar-lg">
                    <img src="<?php echo base_url(); ?>assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="index.php" class="navbar-brand m-0">Vidhyarthi</a>
            </div>
            <div class="card navbar-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Faculty Sign Up</h4>
                    <p class="card-subtitle">Create a new account</p>
                </div>
                <div class="card-body">
                    <?php echo form_open('Welcome/faculty_signup'); ?>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-9">
                           
                            </div>
                        </div>
                        <label class="form-label" for="name">Full Name:</label>
                        <div class="input-group input-group-merge"> 
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Your full name', 'name' => 'name', 'value' => set_value("name")]);   ?>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('name');         ?>
                                    </div> 
                        </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="email">Email address:</label>
                        <div class="input-group input-group-merge">
                            
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Your email address', 'name' => 'email', 'value' => set_value("email")]);   ?>

                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('email');         ?>
                                    </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for=""> Contact number</label>
                        <div class="input-group input-group-merge">
                            
                              <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Your contact number', 'name' => 'mobile', 'value' => set_value("mobile")]);   ?>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('mobile');         ?>
                                    </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="">DOB:</label>
                        <div class="input-group input-group-merge">
                            
                            <?php echo form_input(['class' => 'form-control form-control-prepended' , 'name' => 'dob', 'value' => set_value("dob"),'type'=>'date']);   ?>
        

                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('dob');         ?>
                                    </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="">College/School</label>
                        <div class="input-group input-group-merge">
                           
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Your college/school name', 'name' => 'institute', 'value' => set_value("institute")]);   ?>

                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-graduation-cap"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('institute');         ?>
                                    </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="">Department</label>
                        <div class="input-group input-group-merge">
                        
                            <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'Your class/course name', 'name' => 'course', 'value' => set_value("course")]);   ?>
                            <div class="input-group-prepend" >
                                <div class="input-group-text">
                                    <span><i class="fa fa-bars"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red; margin-top:10px">
                                        <?php echo form_error('course');         ?>
                                    </div>
                    </div>
                  
                        <!-- <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php//  echo form_error('gender');         ?>
                                    </div> -->
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Gender</label>
                        <div class="input-group input-group-merge">
                            <div class="col-lg-3">
                                <input type="radio" name="gender" value="female" id="">
                                <span><i class="fa fa-female"></i></span> Female
                            </div>
                            <div class="col-lg-3">
                                <input type="radio" value="male" name="gender" id="">
                                <span><i class="fa fa-male"></i></span> Male
                            </div>
                            <div class="col-lg-3">
                                <span><i class="fa fa-human"></i></span>
                                <input type="radio" value="others" name="gender" id=""> Others
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('gender');         ?>
                                    </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password:</label>
                        <div class="input-group input-group-merge">
                            <input id="password" type="password" class="form-control form-control-prepended" name= 'password'placeholder="Choose a password">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('password');         ?>
                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password2">Confirm Password:</label>
                        <div class="input-group input-group-merge">
                            <input id="password2" type="password"  class="form-control form-control-prepended" placeholder="Confirm password"
                            name="cpassword">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="color:red;  margin-top:10px">
                                        <?php echo form_error('cpassword');         ?>
                                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign Up</button>
                    <div class="form-group text-center mb-0">
                        <div class="custom-control custom-checkbox">
                            <input id="terms" type="checkbox" class="custom-control-input" checked  >
                            <label for="terms" class="custom-control-label text-black-70">I agree to the <a href="#" class="text-black-70" style="text-decoration: underline;">Terms of Use</a></label>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="card-footer text-center text-black-50">Already signed up? <a href="<?php echo base_url(); ?>index.php/Welcome/login\">Login</a></div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="<?php echo base_url(); ?>assets/vendor/dom-factory.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="<?php echo base_url(); ?>assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="<?php echo base_url(); ?>assets/js/app-settings.js"></script>


</body>

</html>