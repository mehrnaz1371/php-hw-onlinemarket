<?php
require 'includes/init.php';
$productsobj=new products();
$products=$productsobj->getlist();
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
    <a href=grouplist.php>grouplist</a><br>
    <a href=signup.php>SignUp</a>
</div>

<div id="section">
<h1>All Products</h1>



<table align="center">

<?php
foreach ($products as $p){
    echo "<tr>";
    echo "<td><a href='list.php?id=$p[id]'>$p[title]</a></td>";
    echo "</tr>";
   echo "<td><img src='files/$p[id].$p[ext]' width='300' height='300'></td>";
   
}
?>

</table>

</div>

        
       <div id="footer">
Copyright © Test
</div>
 


   
    </body>
</html>