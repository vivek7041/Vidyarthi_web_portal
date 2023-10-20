<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <title>Check email</title>
</head>
<body>
    <div class="container">
        <div class="row mx-auto mt-3" style="text-align:center">
        <h2><u>  <?=$title;?></u></h2>
        </div>
        <div class="col-lg-6 mx-auto">
        <?php echo form_label("Enter Email");?>
        <input type="text" name="email"  class="form-control"id="">
        <span id="email_result">

        </span>
        <br><br>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    


    
    <script>
        $(document).ready(function(){
            $('#email').change(function(){
                var email=$('#email').val();
                if(email!=''){
                    $.ajax({
                        url:"<?php echo base_url();?>encryption/check_email_availability",
                        method:"POST",
                        data:{email:email},
                        success: function(data){
                            $('#email_result').html(data);
                        }
                    });
                }
            });
        })
    </script>
</body>
</html>