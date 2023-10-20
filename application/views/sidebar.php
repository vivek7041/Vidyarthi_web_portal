 
                    <div class="mdk-drawer js-mdk-drawer"
                         id="default-drawer">
                        <div class="mdk-drawer__content ">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark "
                                 data-perfect-scrollbar>
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">APPLICATIONS</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               href="<?=base_url()?>index.php/Welcome/studentdashboard">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                                            </a>
                                            <!--  -->
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button active"
                                               href="instructor-dashboard.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> School/College
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Account menu -->
                                    <div class="sidebar-heading">Team setting</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse"
                                               data-toggle="collapse"
                                               href="#account_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                             Team Members Details
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse"
                                                id="account_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="<?=base_url()?>index.php/Welcome/createTeam" >
                                                        <span class="sidebar-menu-text">Create Team</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="<?= base_url()?>index.php/Welcome/addTeam">
                                                        <span class="sidebar-menu-text">Add Team members</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button"
                                                       href="<?=base_url()?>index.php/Welcome/manageTeam">
                                                        <span class="sidebar-menu-text">Manage Team</span>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                    <div class="sidebar-heading">Student</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="<?=base_url()?>index.php/Welcome/participation">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Browse Events
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="<?=base_url()?>index.php/Welcome/events">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Enrolled Events
                                            </a>
                                        </li>
                                        
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href=" ">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i> Feedback
                                            </a>
                                        </li>
                                        
                                        
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="<?php echo base_url();?>index.php/Welcome/logout">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Components menu -->
                                    