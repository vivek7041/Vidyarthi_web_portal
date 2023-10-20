<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<title>Add Event</title>
      <?php include 'header1.php'; ?> 

      <script>
          $(document).ready(function(){
              $("#myInput").on("keyup",function(){
                  var value= $(this).val().toLowerCase();
                  $("#mytable tr").filter(function(){
                      $(this).toggle($(this).text().toLowerCase().indexof(value)>-1)
                  });
              });
          });
      </script>
</head> 
    <body> 
        
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 
                
                    <div class="col-lg-4">
                        <form  class="form-inline">
                            <input type="search" placeholder="Search" aria-label="Search" id="myInput" class="form-control">
                            <button class="btn btn-outline-success" type="submit" >
                                    Submit
                            </button>
                        </form>
                    
                </div>
                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">
                    <table class="table">
                                <thead class="thead" style="text-align:center;">
                                    <th>Sr. no.</th>
                                    <th>Student name</th>   
                                    <th>Event name</th>
                                    <th>Event category</th>
                                    <th>Student Course;</th>
                                </thead>
                                <tbody class="tbody" id="mytable" style="text-align: center;">
                                <?php 
                                $c=1;
        foreach($data as $row): ?>
    <tr> 
                <td>
             <?=$c;?>
                </td>
      
        <td><?php
     echo $row->student_name;
     echo '<br>'; ?>
     </td>  
       
       <td> <?php
     echo $row->event_name;?></td>
     <td><?php echo $row->event_category;?></td>
     <td><?php echo $row->student_course;?></td>
       
    <?php
      $c++; endforeach;  ?>
    </tr>
                             </tbody> 
                                </table> 
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