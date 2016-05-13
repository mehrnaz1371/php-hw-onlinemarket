<?php
include 'includes/init.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$user=new products();
$user->adduser($firstname, $lastname, $email, $password);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
    </head>
    <body>
              <div id="header">
<h1>Online Market</h1>
</div>
        
        <div id="nav">
    <a href=addproduct.php>Add Product</a><br>
    <a href=index.php>home</a><br>
    <a href=grouplist.php>grouplist</a><br>
    
</div>
        <div id="section">
        <form action="" method="post">
            Firstname: <input type="text" name="firstname"><br>
            Last Name :<input type="text" name="lastname"><br>
            Email: <input type="text" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="selection" value="signup">
            
            
        </form>
        </div>
       
    </body>
</html>
