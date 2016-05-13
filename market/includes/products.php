<?php
class products{
    /**
   
     * @return mysqli
     */
   
    public function add($title,$details,$ext,$groupid){
        global $db;
        $query="INSERT INTO products_table SET title='$title',details='$details',ext='$ext',groupid='$groupid'";
        $res=$db->query($query);
        if($res==false){
            echo $db>error;
          
        }
        
        return $db->insert_id;
        
    }
    public function edit($id,$title,$details,$ext,$groupid){
        global $db;
        
       $query="UPDATE products_table SET title='$title',details='$details',ext='$ext',groupid='$groupid' WHERE id=$id";
       $res=$db->query($query);
       if($res==false){
           echo $db->error;
       }
  
        
    } 
 
    public function get($id){
       global $db;
       $res=$db->query("SELECT * FROM products_table WHERE id=$id");
       if($res==false){
           echo $db->error;
           
       }
       return $res->fetch_assoc();
    }
    //select query of grouptype
    public function getgroups(){
        global $db;
        $res2=$db->query("SELECT * FROM groups");
        if($res2==false){
            echo 
            $db->error;
        }
        return $res2->fetch_all(MYSQLI_ASSOC);
    }
    //index show products
    public  function getlist(){
        global $db;
        $res=$db->query("SELECT * FROM products_table");
        if($res==false){
            echo $db->error;
    }
    return $res->fetch_all(MYSQLI_ASSOC);
        
    }
    public function addgroups($label){
        global $db;
        $query="INSERT INTO groups SET label='$label'";
        $res=$db->query($query);
        if($res==false){
    echo $db->error;
}
return $db->insert_id;
    }
    
  public function editgroups($id,$label){
        global $db;
        $query="UPDATE  groups SET label='$label' WHERE id=$id";
        $res=$db->query($query);
        if($res==false){
    echo $db->error;
}
    }
   
    public function getgroup2(){
        global $db;
        $res2=$db->query("SELECT * FROM groups");
        if($res2==false){
            echo 
            $db->error;
        }
        return $res2->fetch_all(MYSQLI_ASSOC);
    }
        public function getgroupedit(){
        global $db;
        $res2=$db->query("SELECT * FROM groups");
        if($res2==false){
            echo 
            $db->error;
        }
        return $res2->fetch_assoc();
    }
    public function getshowgroups($id){
        global $db;
        $query = "SELECT * FROM products_table WHERE groupid='$id'";
$res = $db->query($query);
if($res==false){
    echo $db->error;
}
    return $res->fetch_all(MYSQLI_ASSOC);
    }
    public function removeproduct($id){
        global $db;
        $res = $db->query("SELECT * FROM products_table WHERE id=$id");
if ($res == false) {
    echo $db->error;
}
return $res->fetch_assoc();
    }
    public function deleteproduct($id){
        global $db;
        $query = "DELETE FROM products_table WHERE id=$id";
        $res = $db->query($query);
        if ($res == false) {
            echo $db->error;
        }
       
        
    }
    
    public function adduser($firstname,$lastname,$email,$password){
        global $db;
        $res=$db->query("INSERT INTO user SET firstname='$firstname',lastname='$lastname',email='$email',password='$password'");
        
    if($res==false){
        echo $db->error;
}}
    public function deletegroup($id){
        global $db;
        $res = $db->query("DELETE FROM groups WHERE id=$id");
if ($res == false) {
    echo $db->error;
}
//return $res->fetch_assoc();
    }
}
