<?php
include 'dbcon.php';
session_start();

function  send_password_reset($get_name,$get_email,$token){


}
if(isSET($_POST['submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $token=md5(rand());
    $check_email='Select * from password_reset where email=""$email limit 1';
    $run=mysqli_query($con,$check);
    if(mysqli_num_rows($run)>0){
        $row=$mysqli_fetch_array($run);
        $get_name=$row['name'];
        $get_email=$row['email'];

        $update_token="UPDATE password_reset SET verify_token='$token' where email=$'$get_email' limit 1";
        $update_token_run=mysqli_query($con,$update_token);
        if($update_token){
            send_password_reset($get_name,$get_email,$token);
            
            $_SESSION['status']="We email you password";
            header("Location: password_reset.php");
            exit(0);

            
        }
        else{
                $_SESSION['status']="Something went wrong";
                header("Location: password_reset.php");
                exit(0);
        }
    }
    else{
        $_SESSION['status']="No email found";
        header("Location: password_reset.php");
        exit(0);
      
    }
}

?>