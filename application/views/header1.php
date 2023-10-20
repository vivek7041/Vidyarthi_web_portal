<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"
      content="IE=edge">
<meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="<?php echo base_url();?>images/demo/tiranga.jpg">
<title>Dashboard</title>  
<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
      rel="stylesheet"> 
<!-- Perfect Scrollbar -->
<link type="text/css"
      href="<?php echo base_url();?>assets1/vendor/perfect-scrollbar.css"
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

<body> 
     
<div class="mdk-header-layout js-mdk-header-layout"> 
    <div id="header"  data-fixed  style="background: #106384;" class="mdk-header js-mdk-header mb-0">
        <div class="mdk-header__content"> 
            <nav id="default-navbar"
                 class="navbar navbar-expand navbar-dark bg-primary m-0">
                <div class="container-fluid">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block"
                            data-toggle="sidebar"
                            type="button" >
                        <span class="material-icons">menu</span>
                    </button> 
                    <!-- Brand -->
                    <a href="studentdashboard "
                       class="navbar-brand">
                        <img src="<?php echo base_url();?>assets1/images/logo/white.svg"
                             class="mr-2"
                             alt="LearnPlus" />
                        <span class="d-none d-xs-md-block">Vidyarthi-Dashboard</span>
                    </a> 
                    <!-- Search -->
                  
                    
                    <ul class="nav navbar-nav flex-nowrap"> 
                        <li class="nav-item d-none d-md-flex">
                            
                        </li> 
                        <!-- Notifications dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                             
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative"> 
                                     

                                    </div>
                                 
                            </div>
                        </li>
                        <!-- // END Notifications dropdown -->
                        <!-- User dropdown -->
                      
                        <li class="nav-item dropdown ml-1 ml-md-3">
                  <div style="color:white;display:block">
                   <p style="margin-right:10px;margin-bottom:0px;color:white;font-size:large;display:block">
                   <?php
                        $name=$this->session->userdata('data'); 
                        echo $name; 
                    ?></p>
                 <small style="display: block;text-align:center"> <?php  $email=$this->session->userdata('email'); 
                        echo $email; 
                        ?>
                        </small></div> 
                            <a class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               href="#"
                               role="button"></a>
                                     
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                 
                                <a class="dropdown-item"
                                   href="<?php echo base_url();?>index.php/Welcome/logout">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </div>
                        </li>
                        <!-- // END User dropdown -->

                    </ul>
                    <!-- // END Menu -->
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>
    

    <!-- // END Header -->
