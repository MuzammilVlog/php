<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
 include("connection.php");

 if(isset($_POST['submit']))
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    $insert="INSERT INTO workp(name,email,password) VALUES ('$name','$email','$password')";



    $final=mysqli_query($cont,$insert);
 }
 ?>



  <div class="container1">
  <form method="post">
    <h1>Login Form</h1>
    <input type="text" placeholder="Name" required name="name"><br><br>
    <input type="text" placeholder="Email" required name="email"><br><br>
    <input type="text" placeholder="Password" required name="password"><br><br>
    <input type="submit"   name="submit"><br><br>
    <input type="file">
  </form>
  </div>
</body>
</html>