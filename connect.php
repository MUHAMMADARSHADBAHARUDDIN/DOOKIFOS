<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) || !empty($username) || !empty($password)) {
        
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "dookifos";
        
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
        if(mysqli_connect_error()){
            die('Connection Failed('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
        $SELECT = "SELECT email From registration Where email = ? Limit 1";
        $INSERT = "SELECT Into registration (username, password) values(?, ?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $username, $email, $password); 
            $stmt->execute();
            echo "Registration successfully!";
        }else{
            echo "Someone already registered using this email";
        }
            $stmt->close();
            $conn->close();
        }
    }else{
        echo "All field are required";
        die();
    }

?>