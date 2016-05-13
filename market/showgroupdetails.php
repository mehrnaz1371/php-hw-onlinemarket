<?php
require 'includes/init.php';
$id = $_GET['id'];
$productsobj=new products();
$row=$productsobj->getshowgroups($id);
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
         <div id="header">
<h1>Edit Products</h1>
</div><div id="nav">
    <a href=index.php>Home</a><br>
    <a href=grouplist.php>grouplist</a><br>
  
</div>
        <div id="section">
        <?php
        $num = count($row);
        echo "num : " ."($num)" ;
        
        ?>
        <br>
      
        <link rel="stylesheet" type="text/css" href="style.css">

    <ul>
            <?php
            foreach ($row as $r) {
                echo "<ul>";
                echo "<li><strong>Product Title:</strong><a href=list.php?id=$r[id]>$r[title]</a></li>";
                echo "<li><strong>Product Details:</strong>$r[details]</li>";
            
                echo "</ul>";
            }
            ?>
        </ul>
        </div>
<div id="footer">
Copyright © Test
</div>
    </body>
</html>
