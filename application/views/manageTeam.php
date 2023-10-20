<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
<title>Manage your Team</title>
      <?php include 'header1.php'; ?> 
</head> 
    <body> 
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push  class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container  page__container p-0">
                            <div class="row m-0">
                                <div class="col container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li> 
                                        <li class="breadcrumb-item active">Manage your team</li>
                                    </ol>
                                    <h1 class="h2">Manage your team</h1> 
    <?php
        if($editable=$this->session->flashdata('editable')):  ?>
        <?php $editable_class=$this->session->flashdata('editable_class'); ?>
        
          <div class="col-lg-12 mx-auto">
            <div class="alert <?= $editable_class ?>">
              <?= $editable;?>
        <?php endif; ?>
            </div>         
                        
                            </div>
                                
                            <!-- table start -->
                            
                                <div class="container-fluid page__container p-0">
                                <table class="table">
                                <thead class="thead" style="text-align:center;">
                                    <th>Sr. no.</th>
                                    <th>Name</th>   
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody class="tbody" style="text-align: center;">
                                <?php 
                                $cnt=1;
        foreach($var as $row): ?>
    <tr> 
                <td>
                <?=$cnt.".";?>
                </td>
        <!-- Member Name -->
        <td><?php
     echo $row->memberName;
     echo '<br>';?>
     </td> 
        <!-- Email -->
        <td><?php
     echo $row->memberEmail;?>
     </td> 
       <!--Member mobile  -->
       <td> <?php
     echo $row->mobile; 	 
     echo '<br>';?> </td> 
         <td> <?=form_open('Welcome/edituser'),
        form_hidden('id', $row->teamleader_id),
        form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-outline-primary']),
        form_close();  
        ?></td>
       <td> <?=form_open('Welcome/deleteuser'),
        form_hidden('id', $row->teamleader_id),
        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-outline-danger']),
        form_close();
        ?></td>
    <?php
      $cnt++; endforeach;  ?>
    </tr>
                             </tbody> 
                                </table>
                                </div>
                            <!-- table end -->
                        </div></div>
                    </div>
                        </div>
                    <?php include 'sidebar.php';?>
                    </div></div>
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
             
        </script>
    </body>
</html>