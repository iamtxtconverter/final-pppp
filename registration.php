<?php
include"header.php";
?>
<div class="row banner">
<h1 class="text-center">REGISTRATION FORM</h1>
</div>

<div class="row p-3">
<div class="col-md-6">
<?php
if(isset($_POST['btnsend']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $age=$_POST['age'];
  $q="insert into
  registration(name,phone,email,address,age,curdate)
  values('$name','$phone','$email','$address','$age',now())";
  
  if(mysqli_query($con,$q))
  {
	  echo "<script>alert('Your registration is done');</script>";
  }  
  else
  {
	  echo mysqli_error($con);
  }

}
?>

<form action="" method="post">
<div class="form-group">
<label for="name">Name </label>
<input type="text" placeholder="Name" name="name" class="form-control"/>
</div>


<div class="form-group">
<label for="Phone">Phone no</label>
<input type="tel" placeholder="Phone" id="Phone" name="phone" class="form-control"/>
</div>



<div class="form-group">
<label for="email">Email</label>
<input type="email" placeholder="Email"id="email" name="email" class="form-control"/>
</div>

<div class="form-group">
<label for="address">Address</label>
<input type="address" placeholder="Address"id="address" name="address" class="form-control"/>
</div>

<div class="form-group">
<label for="age">Age</label>
<input type="age" placeholder="Age" id="Age" name="age" class="form-control"/>
</div>

<div class="form-group">
<input type="submit" value="send" name="btnsend" class="btn btn-success"/>
</div>
</form>
</div>

<div class="col-md-6">
<img src="img/logo.webp" height="480" width="100%" />
</div>
</div>

<?php
include"footer.php";
?>


