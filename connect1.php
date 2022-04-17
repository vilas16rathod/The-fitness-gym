<?php
      
        $m_name = $_POST['m_name'];
        $m_email = $_POST['m_email'];
        $m_password = $_POST['m_password'];
        $m_contact = $_POST['m_contact'];
       

        // Create Connection
          $conn = new mysqli('localhost','root','','fit_gym', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into memberregister_tb(m_name, m_email, m_password, m_contact) VALUES ( ?, ?, ?, ? )");
               $stmt->bind_param("ssss", $m_name,  $m_email, $m_password, $m_contact);
               $stmt->execute();
               echo "registration successfully...";
               $stmt->close();
               $conn->close();
            }
?>