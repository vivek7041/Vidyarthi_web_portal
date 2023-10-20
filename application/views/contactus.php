<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'head.php'; ?>
  <link rel="icon" href="<?php echo base_url();?>images/demo/tiranga.jpg">
  <title>Contact us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include 'header.php'; ?>
  
</head>

<body>
  <div class="container my-4">
  <hr>
    <h1>Contact Us</h1>
    <form>
      <div class="form-group">
        <label for="">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="abc@xyz.com">
      </div>
      <div class="form-group">
        <label for="">Select your Query</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Technical</option>
          <option>Event related</option>
          <option>Faculty related</option>
          <option>Complaints/Queries</option>
        </select>
      </div>

     

  <div class="form-group">
    <label for="">Tell us about yourself</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Elaborate your Concern</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-primary">Submit</button>
</form>
<hr class="featurette-divider">
</div>
<?php include 'footer.php';?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>

<!-- https://source.unsplash.com/random/160×160/?phones -->