<?php
     $description = $_POST["description"];
     $problem = $_POST["problem"];

     // Database connection
     $conn = new mysqli('localhost','root','','sql12788246');
     if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into feedbacks(description, problem)valus(?, ?)");
        $stmt->bind_param("ss", $description, $problem);
        $stmt->execute();
        echo "complaint lodged...";
        $stmt->close();
        $conn->close();
     }
?>     