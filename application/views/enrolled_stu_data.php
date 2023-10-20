<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head> 
<title>Enrolled events</title>
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
                    <div class="mdk-drawer-layout__content page ">
                        <div class="container page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li> 
                                        <li class="breadcrumb-item active">Enrolled events/competitions</li>
                                    </ol>
                                    <h1 class="h2">Enrolled events/competitions</h1>
                                    
                                   <table class="table" style="font-size: large;">
                                   <thead >
                                    <th style="font-size:larger;">#</th>
                                       <th style="font-size:large;">Event name</th>
                                       <th style="font-size:large;">Event category</th>
                                       <th style="font-size:large;">Event details</th>

                                       <?php $count=0;foreach($var as $row):   ?></thead>
                                       <tbody>
                                       <td>  <?php echo ++$count;  ?></td>
                                           <td>  <?php echo $row->event_name;  ?></td>
                                           <td>  <?php echo $row->event_category;  ?></td>
                                            <td>     
                                            <span>  <?=form_open('Welcome/event_complete_details'), form_hidden('event_name', $row->event_name),
                                    form_submit(['name'=>'submit','value'=>'More details','class'=>'btn btn-outline-success','id'=>'btnspc']),
                                    form_close(); $row->id; ?></span></td>
                                       </tbody>
                                    <?php endforeach;   ?>
                                   </table> 
                        </div></div></div>
                        </div>
                    <?php include 'sidebar.php';?>
                </div>
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
 
    </body>
</html>