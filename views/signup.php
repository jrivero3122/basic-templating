<?php

    require_once(__ROOT__."/controllers/db_connect.php");
    
?>

<form class="cmxform" id="signupForm" method="POST" action="../controllers/User_signup.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address (Username)</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
        <small id="passwordError" class="form-text text-muted">Password should contain more than 7 characters</small>
    </div>
    <div class="form-group">
        <label for="exampleInputFirstName">First Name</label>
        <input type="text" name="firstname" class="form-control" id="exampleInputFirstName" placeholder="First Name" required>
  </div>
  <div class="form-check">
        <label for="exampleInputLastName">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="exampleInputLastName" placeholder="Last Name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlCitySelect">City</label>
    <select class="form-control" id="citySelect" name="city" required>
        <option value="">Select a city</option>


<?php
    $query = "SELECT * FROM City;";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo ' <option value="'  .  $row["id"]  .  '"> '  .  $row["city_name"]  .  ' </option> '; 
      
    }
    
} else {
    echo "<option>Please reload the form</option>";
}


?>
        
    </select>
  <div class="form-group">
    <label for="exampleFormControlRoleSelect">Role</label>
    <select class="form-control" id="roleSelect" name="role" required>
        <option value="">Select a role</option>
        
        <?php
            $query = "SELECT * FROM Role;";

            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo ' <option value=" '  .  $row["id"]  .  ' "> '  .  $row["role_name"]  .  ' </option> ';
                  
                }
                
            } else {
                echo "0 results";
            }
            
    

        ?>
        
        
    </select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
  
</form>


<?php

 $conn->close();
 
 ?>