<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption page</title>
    <style>
        .container{
            margin:20px;
            padding: 10px;
            border:2px dashed green;
            box-decoration-break: clone;
            box-sizing: content-box;
            text-align: center;
            text-decoration: dotted;
            
        }
        .header{
            background-color: peachpuff;
        }
        .row{
            
        }
        h2{
            text-shadow: 3px;
            font-weight: 500;
            
        }
        .error_msg{
            color:red;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
        <H2>Encryption in Codeigniter</H2>
        </div>
        <div class="row">
            <div class="col">
              <?php echo form_open('encryption/key_encoder');
              echo '<div class="error_msg">';
              echo validation_errors();
              echo "</div>";
              echo form_label('Enter your message');
              $data= array(
                  'name'=>'key',
                  'placeholder'=>'Please enter a message'
              );
              echo form_input($data);
              echo "<br/>";
              echo "<br/>";
              echo form_submit('submit','Encode');
              echo form_close();
              if(isset($decrypt_value)&& $decrypt_value !=NULL){
                echo form_fieldset('Decrypted Message', "class= 'result_decode'");
                echo "</br>".$decrypt_value."</br>";
                echo form_fieldset_close();
            }

              ?>

            </div>
            </form>
        </div>
            <?php
            if(isset($encrypt_value)&& $encrypt_value!=NULL)
            {
                echo form_fieldset('Encrypted Message',"class='result_encode'");
                echo "<br>".$encrypt_value."</b>";
                echo form_fieldset_close();
                echo"<div class='decode_form'>";
                echo form_open('encryption/key_decoder');
                echo form_label("Decode encrypted message");
                $data=array(
                    'name'=>'encrypt_key',
                    'value'=>$encrypt_value
                );
                echo form_input($data);
                echo "<br>";
                echo "<br>";
                echo form_submit('submit','Decode');
                echo form_close();
                echo "</div>";
                
            }
            

            ?>


    </div>
</body>
</html>