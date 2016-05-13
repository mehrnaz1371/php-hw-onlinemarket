
<?php
require 'includes/init.php';
   
 $products=new products();
 $groups=$products->getgroups();
if($_SERVER['REQUEST_METHOD']=="POST"){
$file=$_FILES['image'];
$title=$_REQUEST['title'];
$details=$_REQUEST['details'];
$groupid=$_REQUEST['groups'];
$arr=  explode(".", $file['name']);
$ext=$arr[count($arr)-1];
if(is_uploaded_file($file['tmp_name'])&& UPLOAD_ERR_OK==$file['error']){
    $products=new products();
   
    $id=$products->add($title,$details,$ext,$groupid);
    $imagename=$id.".".$ext;
    move_uploaded_file($file['tmp_name'],"files/$imagename");
}
redirect("index.php");
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
<h1>Add Products</h1>
</div>
        
<div id="nav">
    <a href=index.php>Home</a><br>
 
    <a href=grouplist.php>grouplist</a>
</div>

<div id="section">





        <form action="" method="post" enctype="multipart/form-data" >
            <table>
                <tr>
                    <td>
                    Title: <input type="text" name="title"></td></tr>
                <tr><td>
                        Details:<textarea name="details"></textarea></td></tr>
                <tr><td>
                        Image:<input type="file" name="image"></td></tr>
              
                    <tr><td>
                    Groups:<select name="groups">
                            <?php
                            foreach ($groups as $g){
                                echo "<option value='$g[id]'>$g[label]</option>";
//                            
                            }
                            
                                    ?>
                        </select>
              
                    </td>
                    <td>
                        <a href="addgroup.php">Add New Group Type</a></td>
                  
                    </tr>
                <tr><td>
                        <input type="submit" value="Add New Product"></td></tr>
            </table>
        </form>
</div>
                
<div id="footer">
Copyright © Test
</div>

    </body>
    
        
</html>
