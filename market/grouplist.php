<?php
require 'includes/init.php';
// $id=(int)$_REQUEST['id'];
 $groupsobj=new products();
$groups=$groupsobj->getgroup2();
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
    <a href=index.php>Home</a><br>
    <a href=addgroup.php>Add Group</a><br>
    <a href=addproduct.php>Add Product</a>
</div>

<div id="section">
<h1>List Of Groups</h1>
        <ul>
        <?php
        echo "<h2>Group List:</h2>";
        foreach ($groups as $g){
            
            echo "<li>";
            
            echo "<a href='showgroupdetails.php?id=$g[id]'>$g[label]</a>";
            echo "     ";
            
            echo "<a href='editgroup.php?id=$g[id]'><button>editgrouptype</button></a>          ";
            echo "<a href='deletegroup.php?id=$g[id]'><button>remove</button></a>          ";
     
//            echo "<td><a href='shownumgroup.php?id=$g[id]'>    num of this group:</a></td>";
//            
          
            echo "</li>";
         
            
           
            
        }
        
        ?>
        </ul>
</div>
       
        
          <div id="footer">
Copyright © Test
</div>
 
  
    </body>
</html>