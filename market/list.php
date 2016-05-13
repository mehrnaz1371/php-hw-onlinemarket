<?php
require 'includes/init.php';
$id = $_GET['id'];
$productsobj=new products();
$products=$productsobj->get($id);
?><html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
    </head>
    <body>
          <div id="header">
<h1>list Products</h1>
</div>
        <div id="nav">
    <a href=index.php>Home</a><br>
    <a href=addproduct.php>add</a><br>
    <a href=grouplist.php>grouplist</a>
</div>

     
        
       
        <div id="section">
        <table>
            <?php
            echo "<tr><td><h2>Product Name:$products[title]</h2></td></tr>";
            echo "<tr><td><strong>Details:</strong>$products[details]</td></tr>";
            echo "<tr><td><img src='files/$products[id].$products[ext]' width='300' height='300'></td></tr>";
           
            ?>
        </table>
            <a href="editproducts.php?id=<?php echo $id; ?>"><h2>edit</h2></a>
            <a href="removeproducts.php?id=<?php echo $id; ?>"><h2>remove</h2></a>
        </div>
                       

    </body>
  

</html>

