<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
    <div class="row">
        <div class="mt-4" style="text-align: center;">
    <h2>Stripe payment Gateway integration</h2>
    </div> <br>
    
    <div class="card mt-5 mx-auto" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">Product Information</h5>
    <h6 class="card-subtitle mb-4 text-muted">
    <?php if(validation_errors()):   ?>       
        <div class="alert alert-danger" role="alert">
        <strong>OOPS!</strong>
        <?php echo validation_errors(); ?>
        </div>
    <?php endif;?>
</h6>
                <div id="payment-errors"></div>
                <form action="<?php echo base_url(); ?>encryption/ " enctype="multipart/form-data" method="post">
                <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required>

            </div><br>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="email@abc.com" value="<?php echo set_value('email'); ?>" required>

            </div>
            <br>
            <div class="form-group">
                <input type="number" id="card_num" autocomplete="off" name="card_num" class="form-control" placeholder="Card Number" value="<?php echo set_value('card_num'); ?>" required>

            </div><br>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="exp_year" maxlength="4" class="form-control" id="card-expiry-year" placeholder="YYYY" value="<?php echo set_value('exp_year'); ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" name="cvv" maxlength="3" class="form-control" id="card-cvv" placeholder="CVV" value="<?php echo set_value('cvv'); ?>">
                        </div>
                    </div>

        <div class="form-group text-right mt-4">
        <button class="btn btn-outline-success" type="submit" id="payBtn"  > Submit Payment</button>
        <button class="btn btn-outline-primary" type="reset">Reset
        </button>
            


        </div>

        </div>
              
            </form>
     
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    </div>

    </div>

</body>
</html>




