<?php
include('config.php');
if(isset($_POST['submit'])){
 $name    =$_POST['name'];
 $email   =$_POST['email'];
 $phone   =$_POST['phone'];
 $user    = $_POST['user'];

echo $final =  date('Y-m-d', strtotime("+".$user." days"));
// $sql ="insert into form (name,email,phone,user) values('$name','$email','$phone','$user')";
//mysqli_query($conn,$sql);
	
}
?>
<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
<form action="" method="post">
Name<input type="text" name="name"><br><br>
email<input type="email" name="email"><br><br>
Phone<input type="text" name="phone"><br><br>
<!--Date<input type="text" id="date" name="date" value=""><br><br>-->
How many classes can your child attend weekly? *
 <select name="user">
  <option value="168">1x weekly</option>
  <option value="84">2x weekly</option>
  <option value="56">3x weekly</option>
</select> <br><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>

<script>
  // $(document).ready(function () {
        // $('#date').datepicker();
    // });
</script>
