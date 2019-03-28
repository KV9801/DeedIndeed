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

	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include("includes/now.fn");


// this pulls input variables from the session form 
$_SESSION["fn"]		= $_POST["fn"];
$_SESSION["title"] 	= $_POST["title"];
$_SESSION["course"] = $_POST["course"];

?>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/bgvol.jpg" alt="" style="height: 1020px">
                </div>
                <div class="signup-form">
                    <form method="POST" name="certificateSubmit" action="certificate.php">
                        <h2>Claim Certificate</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <?php echo  $_SESSION["fn"]; ?>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Title :</label>
                                <?php echo  $_SESSION["title"]; ?>
                            </div>
                            
                        </div>
                        


                        <div class="form-group">
                            <label for="course">NGO :</label>
                            <?php echo  $_SESSION["course"]; ?>
                        </div>

                       

                        

            
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Claim Now!" class="submit" name="submit" id="submit" />
                        </div>

<!-- make sure we send our variables through this form page to the next one -->
<input type="hidden" name="fn" value="<?php echo  $_SESSION["fn"]; ?>">
<input type="hidden" name="title" value="<?php echo  $_SESSION["title"]; ?>">
<input type="hidden" name="course" value="<?php echo  $_SESSION["course"]; ?>">

                    </form>
                </div>
            </div>
        </div>

    </div>

    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>


	
