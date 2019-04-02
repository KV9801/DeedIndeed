<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Donation Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    
    <div class="main">
        <div class="container" style="padding-right: 20px;">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/bg.jpg" alt="" style="height: 1020px; width: 680px">
                </div>
                <div class="signup-form">
                    <a href="../index.php"><img src="images/close.png" alt="" style="height: 30px; width: 30px; float: right; padding-top: 20px"></a>
                    <form action="Certificate/index.php" method="post">
                        <br>
                        <h2>donation form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name :</label>
                                <input type="text" name="fname" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name :</label>
                                <input type="text" name="lname" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email Address :</label>
                            <input type="text" name="email" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="Male"> 
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="Female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount :</label>
                            <input type="number" name="amount" id="amount">
                        </div>
                        <div class="form-group">
                            <label for="ngo">NGO :</label>
                            <div class="form-select">
                                <select name="ngo" id="ngo">
                                    
                                    <option value="Goonj">Goonj</option>
                                    <option value="Smile Foundation">Smile Foundation</option>
                                    <option value="Helpage India">Helpage India</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="course">Payment Method :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="computer">Credit Card</option>
                                    <option value="desiger">Debit Card</option>
                                
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cno">Card Number :</label>
                            <input type="number" name="cno" id="cno">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Expiration Date :</label>
                                <input type="date" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">CVV :</label>
                                <input type="number" name="father_name" id="father_name" required/>
                            </div>
                        </div>

            
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </form>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>



<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'dbconfig.php';

$Fname = $_POST["fname"];
$Lname = $_POST["lname"];
$email = $_POST["email"];
$amount = $_POST["amount"];
$cno = $_POST["cno"];
$ngo = $_POST["ngo"];
$gender = $_POST["gender"];

$query = "INSERT INTO don (firstname,lastname,email,amount,cno,ngo,gender) VALUES ('$Fname','$Lname','$email','$amount','$cno','$ngo','$gender')";

mysqli_query($conn,$query);
}

?>

</body>
</html>

