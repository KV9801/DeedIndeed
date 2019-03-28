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
                    <form method="POST" class="register-form" id="register-form">
                        <h2>volunteering form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="father_name" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email Address :</label>
                            <input type="text" name="address" id="address" required/>
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
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="computer">10 am - 12 pm</option>
                                    <option value="computer">12 pm - 2 pm</option>
                                    <option value="computer">2 pm - 4 pm</option>
                                    <option value="computer">4 pm - 6 pm</option>
                                    <option value="computer">6 pm - 8 pm</option>
                                    
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Start Date :</label>
                                <input type="date" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="name">End Date :</label>
                                <input type="date" name="name" id="name" required/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="course">NGO :</label>
                            <div class="form-select">
                                <select name="course" id="course">
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

echo " Added Successfully ";

}

?>

</body>
</html>