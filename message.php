 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
if(isset($_POST['email'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  // $phone=$_POST['Phone'];
  $msg=$_POST['comments'];

  $to='info@KabulKia.com';
  $subject='Client Message';
  $message="Name:".$name."\n"."Email:".$email."\n\n".$msg;
  $header="Form:".$email;

  if(mail($to,$subject,$message,$header)){
    ?>
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Sent Successfully!</strong> Thank you, We will contact you shortly!
      <a href="index.php"> <strong> Back </strong></a>
  </div>
 <?php }
  else {
    ?>
  <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Something went wrong!</strong> Please click
     <a href="index.php"> <strong> Try Again</strong></a>
  </div>
  <?php
     }
}
?>