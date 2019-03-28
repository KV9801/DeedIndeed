<?php session_start(); ?>
<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php require_once "connect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>Question and Answers</title>
    <html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<style>
.hitbtn {
        position: relative;
        background: #1E9E53;
        color: white;
        padding: 0 30px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 1.2px;
        font-size: 16px;
        border-radius: 3px;
        border: none;
        outline: none;
        line-height: 2.7;
    }
</style>

<body>
    <!-- navbar   -->
    <h3 style="text-align: center; font-size: 34px; font-family: 'dosis', sans-serif; text-transform: uppercase; color: #FC573A;"><b>Questions</b></h3>
                <br>

    
       <div class="container-fluid">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="margin-top: 40px;">
            <div style="display:inline-block; vertical-align:bottom;">
                <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
            </div>
            <?php 
                if(isset($_GET['qid'])) {
                $qid= $_GET['qid'];
                $question_query= "SELECT * FROM question WHERE qid= ".$qid."";
                $result_question = mysqli_query($conn,$question_query);
                $row = mysqli_fetch_assoc($result_question) ;
                //echo $row['questiondb'];
                //echo $row['user_name'];
            }
            ?>  
            <div style="display:inline-block; vertical-align: top;">
                <h3 style="color: #2D2D2D; padding-left: 10px; text-transform: capitalize;"><b><?php echo $row['user_name']; ?></b></h3>
                <i style="padding-left: 10px;"><?php echo $row['time']; ?></i>
            </div>
            <h3 style="color: black; font-family: 'Open Sans', sans-serif; font-size: 22px; font-size: 20px; margin-left: 60px;"><?php echo $row['questiondb'];?></h3>
            <a href="#demo" class="comment" data-toggle="collapse" data-toggle="tooltip" title="Click to Comment" style="color: #444242; margin-left: 60px;">Comment</a>
            <div id="demo" class="collapse">
                <br>
                <?php 
                if(isset($_SESSION['user_id']))
                            {
                                $user_id= $_SESSION['user_id'];
                                $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $user_email=$row['email'];
                                $time = date('dS F,Y | g:i:s A');
                                if(isset($_POST['answer']))
                                {
                                    $answer=mysqli_real_escape_string($conn,htmlentities($_POST['answer']));
                                    $answer_query= "INSERT INTO answer(answerdb,qid,user_name,user_email,time) VALUES('{$answer}', '{$qid}', '{$user_name}','{$user_email}','{$time}')";
                                    $result_answer = mysqli_query($conn,$answer_query);
                                 } ?>
                                 
                <form action="question.php?qid=<?php echo urlencode($qid);?>" method="POST">
                <textarea rows="3" style="background-color: #F4F4F4" class="form-control autogrow" name="answer" value="" required="" placeholder="Write a comment..." name="answer" type="text"></textarea>
                <br>
                <input type="submit" name="submit" class="btn btn-info btn-sm" style="background-color: #444242; color: white;"> 
                </form>
                <?php 
                    }
                else
                    { if(isset($_GET['qid'])) {
                        $qid= $_GET['qid'];
                echo "<br>" .'<a href="login.php?qid='.urlencode($qid).'"><button type="submit" class="hitbtn" style="text-align: center;">Login to add a Comment</button></a><br>';
            }
        }
            ?>
            </div>
        </div>
        <?php 
            if(isset($_SESSION['user_id'])) { ?>
            <div class="col-md-2" style="margin-top: 60px;">
            <a href="logout.php"><button type="submit" class="hitbtn" style="text-align: center;">Logout</button></a>
        </div>
             <?php
    }
    ?>
        
    </div>
    

    <div class="space" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" style="margin-top: 40px;">
                <h3 style="text-align: center; font-size: 34px; font-family: 'dosis', sans-serif; text-transform: uppercase; color: #FC573A;"><b>Comments</b></h3>
                <br>
        <?php 
        if(isset($_GET['qid'])) {  $qid= $_GET['qid'];
                                 $answer_query= "SELECT * FROM answer WHERE qid='{$qid}'";
                                    $result_answer = mysqli_query($conn,$answer_query);  
                                    while($row = mysqli_fetch_assoc($result_answer)) {   ?> 
                            <hr>
                            <div style="display:inline-block; vertical-align:bottom;">
                                <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
                            </div>
                            <div style="display:inline-block; vertical-align: top;">
                                <h3 style="color: #2D2D2D; padding-left: 10px; text-transform: capitalize;"><b><?php echo $row['user_name']; ?></b></h3>
                                <i style="padding-left: 10px;"><?php echo $row['time']; ?></i>
                            </div>
                            <br>
                            <br>
                            <p style="color: black; font-family: 'Open Sans', sans-serif; font-size: 20px; margin-left: 60px;"><?php echo $row['answerdb']; ?></p>
                                     <?php  
                                        }
                                    }
                                    ?>
                    <hr>                            
            </div>

            <hr>        
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- footer     -->
    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
                <li><a href="#" class="py-2 d-block">Causes</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Block 516, Lake  Garden Office, Andheri West, Mumbai - 400054</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9876543210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@deedindeed.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
          </div>
        </div>
      </div>
    </footer>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>
 <?php 
error_reporting(1);
  if(isset($_POST['email']))
    {
        $email=  mysqli_real_escape_string($conn,htmlentities($_POST['email']));
        if(!empty($email))
          {  
          if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
           {          
                 $query = "INSERT INTO subscribe(email) VALUES ('{$email}')"; 
                 $result = mysqli_query($conn,$query);
          }
         }
    } 
          ?>
