<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
<title> Participating </title>
      <?php include 'header1.php'; ?> 
</head> 
    <body> 
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
                <div data-push data-responsive-width="900px" class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page "> 
                        <div class="container-fluid page__container p-0">
                            <div class="row">
                                <div class="container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Welcome/studentdashboard">Home</a></li> 
                                        <li class="breadcrumb-item active">Event/activity participation</li>
                                    </ol>
                                    <h1 class="h2">Participation </h1> 
                                    <h3>Event/Activity details:</h3>
                                    <img src=" " alt="">
                                    <table class="table"> 
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event name</th>
      <th scope="col">Category</th>
      <th scope="col">Event description</th>
      <th scope="col">Participate </th>
    </tr>
  </thead>
  <tbody> <?php $count=0; foreach($data as $row):    ?>
    <tr>
      <td><?php echo ++$count."."; ?></td>
      <td>  <?php   echo $row->name;?></td>
      <td><?php   echo $row->category;?></td>
      <td> <?php    echo $row->about;      ?></td>
      <td>
                                   <?=form_open('Welcome/register_contest'), form_hidden('id', $row->id),
                                    form_submit(['name'=>'submit','value'=>'Participate','class'=>'btn btn-outline-success']),
                                    form_close();
                                    ?></a></td>
    </tr>
   
  </tbody>  <?php   endforeach;  ?> 
</table>
                                                                  
                                     

            </div>         
                        
                            </div> 
                            
                                                 </div></div>
                  
                    <?php include 'sidebar.php';?>
                    </div></div>

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