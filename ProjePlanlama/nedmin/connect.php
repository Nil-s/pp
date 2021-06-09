<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=projeplanlama", "root", "");
   // echo "selam";
}catch(PDOException $e){
    print $e -> getMessage();
}
    
?>