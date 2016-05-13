<?php
require 'includes/init.php';
if(isset($_POST['selection'])){
$label=$_REQUEST['label'];
$id=$_GET['id'];
$groupsobj=new products();
$groups=$groupsobj->editgroups($id, $label);
    
//   
redirect("grouplist.php");
}
$groupsobj=new products();
$grouprows=$groupsobj->getgroupedit();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
    </head>
    <body>
       <div id="header">
<h1>Edit Groups</h1>
</div><div id="nav">
    <a href=index.php>Home</a><br>
 
    <a href=grouplist.php>grouplist</a>
</div>
        <div id="section">
        
        <form action="" method="post">
      
            Group Name:<input type="text" name="label" value="<?php echo $grouprows['label']?>">
            <input type="submit" name="selection" value="edit">
            
            
        </form>
        </div>
        
    </body>
</html>