
<?php
require 'includes/init.php';
$id = $_REQUEST['id'];
$groupsobj=new products();
$group=$groupsobj->deletegroup($id);
     $groups=$groupsobj->deletegroup($id);
       
   
   
    redirect("grouplist.php");
    
  
?><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <a href="index.php">home</a>
        <a href="add.php">add</a>

     
    </body>
</html>