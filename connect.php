<?php
      
        $r_name = $_POST['r_name'];
        $r_email = $_POST['r_email'];
        $r_password = $_POST['r_password'];
        $r_contact = $_POST['r_contact'];
       

        // Create Connection
          $conn = new mysqli('localhost','root','','fit_gym', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into trainerregister_tb(r_name, r_email, r_password, r_contact) VALUES ( ?, ?, ?, ? )");
               $stmt->bind_param("sssi", $r_name,  $r_email, $r_password, $r_contact);
               $stmt->execute();
               echo "registration successfully...";
               $stmt->close();
               $conn->close();
            }
?>