<?php
    session_start();
    
    //Validated method POST (if GET, user is redirected to home page)
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Validated the information inside the POST variable (email & password)
        if(isset($_POST["email_info"]) && isset($_POST["password_info"])){
            
            //Validated email & password against "database"
            if("hello@gmail.com" == $_POST["email_info"] && "1234" == $_POST["password_info"]){
                
                //Created the session (if user valid)
                if(!isset($_SESSION["weird_session_name"]))
                {
                    $_SESSION["weird_session_name"] = $_POST["email_info"];
                }
                
                //Created the response message
                $data = [
                    "code" => 200, 
                    "message" => "success",
                    "data" => $_POST["email_info"]
                    ];

            }else{
                
                $data = [
                    "code" => 800, 
                    "message" => "error",
                    "data" => "Invalid information"
                    ];
                //END - Created the response message
                
            }
            
        }else{
        //END - Validated the information inside the POST variable (email & password)
        $data = [
                "code" => 900, 
                "message" => "error",
                "data" => "Wrong or corrupt information"
                ];
        }
        
        //Encoded the response message (JSON)
            echo json_encode($data);
        //END - Encoded the response message (JSON)
        
    }else{
        
        header('Location: /');
    }
    //END - Validated method POST (if GET, user is redirected to home page)
    
?>