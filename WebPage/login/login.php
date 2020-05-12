<?php 

require("db.php");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where username='".$uname."'AND password='".$password."' ";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
       
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>