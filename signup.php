<?php
$servername="localhost";
$username="root";
$password="";
$dbname="orderlist";

$conn=mysqli_connect($servername,$username,$password,$dbname);


?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   background-image: url(bgp.jpg);
   background-repeat: no-repeat;
   background-size: cover;
}
* {box-sizing: border-box}
input[type=text], input[type=password],input[type=email] {
   width: 100%;
   font-size: 28px;
   padding: 15px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
}
label{
   font-size: 15px;
}
input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
   background-color: #ddd;
   outline: none;
}
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
}
button {
   font-size: 18px;
   font-weight: bold;
   background-color: rgb(10, 119, 13);
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
}

button:hover {
   opacity:1;
}
.cancel {
   padding: 14px 20px;
   background-color: #ff3d2f;
}
.formContainer {
   padding: 16px;
}
.formContainer p{
   font-size: 28px;
}
</style>
<body>
<form  method="POST">
<div class="formContainer">
<h1>Sign Up</h1>
<hr>
<label for="name"><b>USERNAME</b></label>
<input type="text" placeholder="Enter name" name="uname" required>
<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter Email" name="email" required>
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<label for="repeatPassword"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="Confirmpassword"
required>
<label>
<input type="checkbox" checked="checked" name="remember" style="marginbottom: 15px"> Remember me
</label>
<p>By creating an account you agree to our <a href="#"
style="color:dodgerblue">Terms & Privacy</a><p>
<div>
<button type="button" class="cancel">Cancel</button>
<button type="submit" class="signup" name="signup">Sign Up</button>
</div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['signup']))
{
   $name=$_POST['uname'];
   $email = $_POST['email'];
   $pwd = $_POST['password'];
   $cpwd = $_POST['Confirmpassword'];

 $query = "INSERT INTO list values('$name','$email','$pwd','$cpwd')";
 $data = mysqli_query($conn,$query);
 
error_reporting(0);
}
?>