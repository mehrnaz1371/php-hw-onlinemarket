<?php
require 'includes/init.php';
   
 $productsgrp=new products();
 $groups=$productsgrp->getgroups();
 
if($_SERVER['REQUEST_METHOD']=="POST"){
    $file=$_FILES['image'];
    $id=(int)$_REQUEST['id'];
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
$productsobj=new products();
$productsobj->edit($id, $title, $details, $ext, $groupid);
    redirect("list.php?id=$id");
}
 $id=(int)$_REQUEST['id'];
 $productsobj=new products();
$products=$productsobj->get($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="style.css">
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
        
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Title:<input type="text" name="title" value="<?php echo $products['title']?>"></td></tr>
                <tr><td>
                        Details:<textarea name="details" ><?php echo $products['details']?></textarea></td></tr>
             <tr><td>
<!--                     I cant update file-->
Image:<input type="file" name="image" value=$imagename></td></tr>
              
               
                   
                <tr><td>
                        Groups:<select name="groups">
                            <?php
                            foreach ($groups as $g){
                                if($products['groupid']==$g['id']){
                                     $s = "selected";
                                }
                                else{
                                    $s="";
                                }
                                
                                echo "<option $s value='$g[id]'>$g[label]</option>";
                            
                            }
                            
                                    ?>
                        </select>
                    </td></tr>    
                <tr><td>
                    <input type="submit" value="edit">
                    </td></tr>
                    
        </form>
</table>
        </div>


    </body>
                            
<div id="footer">
Copyright © Test
</div>
</html>
