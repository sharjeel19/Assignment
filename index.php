<?php
    $pageTitle = "Registration Form";
    require_once "includes/header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center"> Registration - Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Adress: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="username" name="username" id="username" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="address">Present Adress: </label>
                        <input type="address" name="address" id="address" class="form-control">
                    </div>


                 
                    <div class="form-group">
                        <label for="permanentaddress">Permanent Adress: </label>
                        <input type="permanentaddress" name="permanentaddress" id="permanentaddress" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="cnic">CNIC: </label>
                        <input type="cnic" name="cnic" id="cnic" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>

                   
                    <input type="submit" name="register" value="Register it " class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>