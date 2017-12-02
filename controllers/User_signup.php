<?php

     require_once("db_connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $city_id = test_input($_POST["city"]);
        $role_id = test_input($_POST["role"]);
        
        
        if( empty($email) ||  empty($password) ||  empty($firstname) ||  empty($lastname) ||  empty($city_id) ||  empty($role_id) ){
            echo "Missing information, please try again";
            die();
        }
        if( strlen($password) < 7 ) {
            
            echo "Invalid Password, please try again";
            die();
            
        }
        
        
        $sql = "INSERT INTO User (username, password, first_name, last_name, role_id, city_id) VALUES ('$email', '$password', '$firstname', '$lastname', $role_id, $city_id)";
        
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            header('Location: /?page=home');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        
        
        
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



?>