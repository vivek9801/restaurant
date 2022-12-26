<?php


if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = "SELECT * FROM list WHERE email = '$email' && password ='$password'";
    $data = mysqli_query($conn,$result);
    $total = mysqli_num_rows($data);
    if($total == 1){
        $_SESSION['email'] = $email;
        header('Location:home.php');
    }
    else{
        echo "<script> alert('email or password cant be found you need to register first'); </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-image: url(bgp.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            padding-bottom: 5%;
        }
        form{
            
            display:inline-table;
            margin-left: 36%;
            padding:20px 30px 40px 50px;
        }
        .user{
           border-radius: 10px;
           padding-left: 10px;
           padding-right: 10px;
           
           display:block;
        }
        .pass{
        border-radius: 10px;
           padding-left: 10px;
           padding-right: 10px;
           }
           .sub{
             width:100%;
  
  font-size: 16px;
  
  text-align: center;
           }
    </style>
   <link rel="stylesheet" href="home.html">
</head>
<body bgcolor="royalblue">
    <h1 align="center">WELCOME TO RESTRO</h1>
    <form class="s" method="POST" autocomplete="off" >
        <h2 align="center"><u>LOGIN PAGE</u></h2>
        <table align="center" cellpadding="10" >
            <tr>
                <td><label for="email">EMAIL:</label></td>
                <td><input type="email" class="user" required name="email"></td>
            </tr>
            <tr>
                <td><label for="password">PASSWORD:</label></td>
                <td><input type="password" class="pass" name="password" required></td>
            </tr>
            <tr >
                <td colspan="2" class="sub"><input type="submit" name="login" value="Login"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">NEED AN ACCOUNT? <a href="signup.php">SIGNUP</a></td>
            </tr>
        </table>
    </form>
<script>
    
</script>
</body>
</html>