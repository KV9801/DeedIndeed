<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/bgvol.jpg" alt="" style="height: 1020px">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="index2.php">
                        <h2>Claim Certificate</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <input type="text" name="fn" id="name" required/>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Title :</label>
                                <input type="text" name="title" id="name" required/>
                            </div>
                            
                        </div>
                        


                        <div class="form-group">
                            <label for="course">NGO :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="Goonj">Goonj</option>
                                    <option value="Smile Foundation">Smile Foundation</option>
                                    <option value="Helpage India">Helpage India</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                       

                        

            
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Claim Now!" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>

<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include("includes/now.fn");

// this sets variables in the session
$_SESSION['time']=$now;
?>
