<?php
require 'includes/init.php';
if(isset($_POST['selection'])){
$label=$_REQUEST['label'];
$products=new products();
$products->addgroups($label);
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
            <h1>Add New Groups</h1>
        <form action="" method="post">
            Group Name:<input type="text" name="label">
            <input type="submit" name="selection" value="add">
            
            
        </form>
      
                </div>
       <div id="footer">
Copyright © Test
</div>
 
    </body>
</html>