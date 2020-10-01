<?php
require_once "database/connection.php";
   

//Form Submission Code
if(isset($_POST['submit'])){
    //Code to handle form
    
    //code for valdating the form
    $errors = [];

    //Name validation
    if(empty($_POST['name'])){
        $errors[] = "Name cannot be empty";
    }
    else{
        $name = trim($_POST['name']);
    }

    //Email Validation
    if(empty($_POST['email'])){
        $errors[] = "Email cannot be empty";
    }
    else{
        $email = trim($_POST['email']);
    }

    //Password Validation
    if(empty($_POST['password'])){
        $errors[] = "Password cannot be empty";
    }
    else{
        $password = $_POST['password'];
    }


     //Username Validation
     if(empty($_POST['username'])){
        $errors[] = "username cannot be empty";
    }
    else{
        $password = $_POST['username'];
    }

     //persent adress Validation
     if(empty($_POST['address'])){
        $errors[] = " Present address cannot be empty";
    }
    else{
        $password = $_POST['address'];
    }


    //Permanent adress Validation
    if(empty($_POST['permanentaddress'])){
        $errors[] = " permanent address cannot be empty";
    }
    else{
        $password = $_POST['permanentaddress'];
    }


     //CNIC Validation
     if(empty($_POST['cnic'])){
        $errors[] = " cnic cannot be empty";
    }
    else{
        $password = $_POST['cnic'];
    }



    //Date of Birth
    if(empty($_POST['dob'])){
        $errors[] = "Date of Birth cannot be empty";
    }
    else{
        $dob = trim($_POST['dob']);
    }

   
    

    //if there are no errors
    if(empty($errors)){
      
        $dbc = db_connect();
        $sql = "INSERT INTO users VALUES(NULL,'$name','$email', '$password','$username','$address','$permanentaddress',$cnic,'$dob')";
        $result = mysqli_query($dbc,$sql);
        if($result){
            echo "<div class = 'alert alert-success'> Data Entered Successfully </div>";
        }
        else{
            echo "<div class = 'alert alert-danger'> Data Cannot be Entered due to error </div>";   
        }
        db_close($dbc);
    }
    else{
        //Display the errors
        foreach($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
    }
}
else{
    //Form is not submitted
    //code
     echo "<div class = 'alert alert-danger'>Form is  submitted </div>";
}
?>