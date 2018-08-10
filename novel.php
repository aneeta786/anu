<?php
include('config.php');
if(isset($_POST['submit'])){
 $name      =$_POST['name'];
 $email     =$_POST['email'];
 $end       =$_POST['end'];
 $user      = $_POST['user'];
 $date      =date('Y-m-d');
 $start     = date_create($date);
 $one       = date_create($end);
$diff       = date_diff($start,$one);
$new        =$diff->days;
echo $result=$user/$new;
//$diff = date_diff(date_create($user),date_create(date("M j, Y")));	
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
last Date<input type="text" id="date" name="end" value=""><br><br>
How many classes can your child attend weekly? *
 <select name="user">
  <option value="168">abc</option>
  <option value="84">xyz</option>
  <option value="56">hfsd</option>
</select> <br><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<script>
  $(document).ready(function () {
        $('#date').datepicker();
    });
</script>