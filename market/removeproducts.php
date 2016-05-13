
<?php
require 'includes/init.php';
$id = $_REQUEST['id'];
$productsobj=new products();
$product=$productsobj->removeproduct($id);
if (isset($_REQUEST['confirm'])) {
    if ($_REQUEST['confirm'] == "Yes!") {
     $products=$productsobj->deleteproduct($id);
       
    }
   
    redirect("index.php");
    
}
  
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <a href="index.php">home</a>
        <a href="add.php">add</a>

        <form action="" method="post">
            Are you really want to delete"<?php echo $product['title'] ?>"?
            <input type="submit" name="confirm" value="Yes!">
            <input type="submit" name="confirm" value="No">
        </form>
    </body>
</html>