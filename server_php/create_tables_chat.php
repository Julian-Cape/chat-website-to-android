<?php

     $servername="localhost";
     $username="";//insert your value! 
     $password="";//insert your value!
     $databasename="";//insert your value!

     $newtable="create_chat";


     //connect to DB
     $conn = new mysqli($servername, $username, $password, $databasename);     

     if($conn->connect_error){
        die("error9: please contact the admin");
     }  


     //delete existing table named "mobileapp_service"
     $sql = "DROP TABLE ".$newtable;     
     $conn->query($sql);

     $sql = "CREATE TABLE ".$newtable." (
       serialnum INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       chatongoing BOOL
     )";       
     
     $conn->query($sql);

     $sql = "INSERT INTO ".$newtable." (chatongoing) VALUES (false)";
     $conn->query($sql);

     $conn->close();

?>