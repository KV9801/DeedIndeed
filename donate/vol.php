<!DOCTYPE html>
<html lang="en">
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
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/bgvol.jpg" alt="" style="height: 1020px">
                </div>
                <div class="signup-form">
                    <a href="../index.php"><img src="images/close.png" alt="" style="height: 30px; width: 30px; float: right; padding-top: 20px; padding-right: 20px"></a>
                    <form action="../index.php" method="POST" class="register-form" id="register-form">
                        <h2>volunteering form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="fname" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
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
                                <input type="radio" name="gender" id="male" value ="Male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value ="Female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date">
                        </div>
                       
                       <div class="form-group">
                            <label for="course">Time Slot :</label>
                            <div class="form-select">
                                <select name="tslot" id="course">
                                    <option value=""></option>
                                    <option value="10 am - 12 pm">10 am - 12 pm</option>
                                    <option value="12 pm - 2 pm">12 pm - 2 pm</option>
                                    <option value="2 pm - 4 pm">2 pm - 4 pm</option>
                                    <option value="4 pm - 6 pm">4 pm - 6 pm</option>
                                    <option value="6 pm - 8 pm">6 pm - 8 pm</option>
                                    
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Start Date :</label>
                                <input type="date" name="sdate" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="name">End Date :</label>
                                <input type="date" name="edate" id="name" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="course">NGO :</label>
                            <div class="form-select">
                                <select name="ngo" id="course">
                                    <option value=""></option>
                                    <option value="goonj">Goonj</option>
                                    <option value="smile">Smile Foundation</option>
                                    <option value="help">Helpage India</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
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

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'dbconfigvol.php';

$Fname = $_POST["fname"];
$Lname = $_POST["lname"];
$email = $_POST["email"];
$tslot = $_POST["tslot"];
$sdate = $_POST["sdate"];
$edate = $_POST["edate"];
$ngo = $_POST["ngo"];
$gender = $_POST["gender"];

$query = "INSERT INTO vol (firstname,lastname,email,tslot,sdate,edate,ngo,gender) VALUES ('$Fname','$Lname','$email','$tslot','$sdate','$edate','$ngo','$gender')";

mysqli_query($conn,$query);
}

?>

</body>
</html>