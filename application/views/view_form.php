<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View form</title>
</head>
<style>

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Convert Codeigniter Query to Json & Insert into Database </h2><br>
            </div><hr>
        </div>
        <div id="form_input">
            <?php
            echo form_open('encryption/data_submitted');
            echo form_label('Employee Name'.'&nbsp;&nbsp;&nbsp;');
            $data_name=array(
                'name'=>'emp_name',
                'id'=>'emp_name_id',
                'class'=>'input_box',
                'placeholder'=>"Please Enter your name",
                'required'=>"required"
            );
            echo form_input($data_name);
            echo '<br>';
            echo '<br>';

            echo form_label('Employee Email'.'&nbsp;&nbsp;&nbsp;');
            $data_email=array(
                'name'=>'emp_email',
                'type'=>'email',
                'id'=>'e_email_id',
                'class'=>'input_box',
                'placeholder'=>"Please Enter your email",
                'required'=>"required"
            );
            echo form_input($data_email);
            echo '<br>';
            echo '<br>';
            

            echo form_label('Gender'.'&nbsp;&nbsp;&nbsp;');
            $data_gender=array(
                'Male'=>'Male',
                'Female'=>'Female'
                
            );
            echo form_dropdown('select',$data_gender,'Male','class="dropdown_box"');
            echo '<br>';
            echo '<br>';

            echo form_label('Address');
            echo "<div class='text'>";
            $data_textarea=array(
                'name'=>'address',
                
                'rows'=>'5',
                'cols'=>'28',
                'placeholder'=>"Address....",
                'required'=>"required"
            );
            echo form_textarea($data_textarea);
            echo "</div>";
            echo '<br>';
            echo '<br>';
            ?>

        </div>
            <div id="form_button">
                <?php echo form_submit('submit','Submit','class="submit"'); ?>
            </div>
            <?php echo form_close();    ?>

            
    </div>
    <?php   
    if(isset($result_msg)){
        echo "<div id='res_msg'>";
        echo $result_msg;
        echo "</div";
    }
    ?>
</body>
</html>