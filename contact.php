<?php
include"header.php";
?>
<div class="row banner">
<h1>Contact Us</h1>
</div>

<div class="row p-4 text-center bg-dark text-light" id="contact">
<div class="col md-4">
<i class="fa fa-envelope"></i>
<h4>Email</h4>
<p>info@softwizz.in</p>
</div>

<div class="col-md-4">
<i class="fa fa-map-marker"></i>
<h4>Location</h4>
<p>Bathinda</p>
</div>

<div class="col-md-4">
<i class="fa fa-phone"></i>
<h4>Contact</h4>
<p>9387482378</p>
</div>
</div>


<div class="row p-3">
<div class="col-md-6">
<?php
if(isset($_POST['btnsend']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  
  

  $message=$_POST['message'];
  $q="insert into
  tbcontact(name,phone,email,subject,message,curdate)
  values('$name','$phone','$email','$subject','$message',now())";
  
  if(mysqli_query($con,$q))
  {
	  echo "<script>alert('Message sent');</script>";
  }  
  else
  {
	  echo mysqli_error($con);
  }

}
?>

<form action="" method="post">
<div class="form-group">
<input type="text" placeholder="Name" name="name" class="form-control"/>
</div>

<div class="form-group">
<input type="text" placeholder="Phone" name="phone" class="form-control"/>
</div>

<div class="form-group">
<input type="email" placeholder="Email" name="email" class="form-control"/>
</div>

<div class="form-group">
<input type="text" placeholder="Subject" name="subject" class="form-control"/>
</div>

<div class="form-group">
<textarea placeholder="Message" name="message" class="form-control">
</textarea>
</div>

<div class="form-group">
<input type="submit" value="Send" name="btnsend" class="btn btn-success"/>
</div>
</form>
</div>
 

<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8807780908064!2d74.9501290145977!3d30.211950017596138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a43c41eed7%3A0xf1bc9286b47f5ea9!2sSoftwizz%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1628742205286!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<?php
include"footer.php";
?>