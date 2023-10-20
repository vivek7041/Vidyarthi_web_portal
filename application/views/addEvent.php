<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title>Add Event</title>
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
                                        <li class="breadcrumb-item active">Add Events/Activities</li>
                                    </ol>
                                    <h1 class="h2">Add Events/Activities</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="list-group-item">   
                                            <?php echo form_open('Welcome/addEvent'); ?>
                                           
                                            </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-profilename"
                                                     class="m-0 form-group">
                                                  
                                                    <div class="form-row">
                                                        <label id="label-profilename"
                                                               for="profilename"
                                                               class="col-md-3 col-form-label form-label">Event Name</label>
                                                        <div class="col-md-8">
                                                            <div role="group"
                                                                 class="input-group input ">
                                                                 <?php echo form_input(['class' => 'form-control form-control-prepended', 'placeholder' => 'xyz competitions', 'name' => 'name', 'value' => set_value("name")]); ?>
                                                            </div>
                                                             
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
                                                               class="col-md-3 col-form-label form-label">Category</label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center" style="margin-top: 10px;">
                                     
    <div class="input-group  col-auto my-9" ">
      <label class="mr-md-5 sr-only" for="inlineFormCustomSelect" >Preference</label>
      <select class="custom-select mr-lg-10" name="category"   id="inlineFormCustomSelect">
        <option selected name="category">Choose...</option>
        <option name="category" value="junior">Junior</option>
        <option value="senior" name="category">Senior</option>
        <option value="Higher education" name="category">Higher education</option>
      </select>
        </div>                                                  
                                                            </div>
                                                           
                                                            <div style="color:red;margin-bottom:0px;padding-bottom:0px"><?php  echo form_error('category'); ?></div>  
                                                        </div>
                                                    </div>
                                                </div><br>
                                                </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-about"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-about"
                                                               for="about"
                                                               class="col-md-3 col-form-label form-label">About Event/Competition</label>
                                                        <div class="col-md-9">
                                                        <?php echo form_textarea(['class' => 'form-control', 'placeholder' => 'About you event or competition in short.', 'name' => 'about', 'value' => set_value("about"),'rows'=>'3']);   ?>
                                                          
                                                        </div> 
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label">Area of Interest</label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center" style="margin-top: 10px;">
                                     
    <div class="input-group  col-auto my-9" ">
      <label class="mr-md-5 sr-only" for="inlineFormCustomSelect" >Preference</label>
<select class="custom-select mr-lg-10" >
      <option selected>Please select</option>
  <option  name="aoi" value="Artificial Intelligence">Artificial Intelligence</option>
  <option  name="aoi" value="Cloud computing">Cloud computing</option>
  <option  name="aoi"  value="AutoCad">AutoCad</option>
  <option  name="aoi" value="Catia">Catia</option>
  <option  name="aoi" value="Android development">Android development</option>
  <option  name="aoi" value="Cyber security">Cyber security</option>
  <option  name="aoi" value="Social">Social</option>
  <option  name="aoi" value="Miscellaneous">Miscellaneous</option> 
</select>  
        </div>                                                  
       </div>
                                                        </div>

 

                                                        <?php
                                                         $id=$this->session->userdata('id');
                                                        echo form_input(['value'=>$id,'type'=>'hidden','name'=>'faculty_id']);?>
                                                           <?php echo form_hidden('created_at',date('Y-m-d H:i:s'));  ?>
                                                    </div>
                                                </div>
                                                
                                            </div><center>
                                            <button class="btn btn-success" style="width:50%;">Publish</button>
                                            </center>
                                           </form>
                                            <div class="list-group-item">
                                                 
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


                    <?php include 'sidebarfaculty.php';?>
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