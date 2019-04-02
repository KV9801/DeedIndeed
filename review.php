<?php session_start(); ?>
<?php require_once "connect.php" ?>
<?php date_default_timezone_set('Asia/Calcutta'); ?>
<?php 
$query= "SELECT * FROM college_list";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);  
if(isset($_GET['id']))
                {
                    $id=$_GET['id'];  }  ?>
        <!DOCTYPE html>
        <html lang="en">
  <head>
    <title>Deed Indeed</title>
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

    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/content.css" />
    <script src="assets/js/modernizr.custom.js"></script>

  </head>

<style class="cp-pen-styles">
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }
    
    html {
        overflow-y: scroll;
    }
    
    body {
        background-color: #FBFCF7;
    }
    
    p {
        font-family: 'Roboto', sans-serif;
        color: #0C0C0B;
        text-align: justify;
        font-size: 16px;
        text-justify: inter-word;
    }
        
    .ques a {
        color: black;
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
    }
    
    .ques a:hover {
        color: #6D3CBC;
    }
    
    .one {
        padding-left: 20px;
    }
    
    .one .col-md-3 {
        border: 1px solid white;
        background-color: #6F5499;
    }
    
    q {
        font-family: 'Allan', cursive;
        font-size: 40px;
        color: white;
        word-spacing: 3px;
    }
    
    .quote span {
        color: white;
        font-family: 'raleway', sans-serif;
        font-size: 25px;
    }
    
    .quote {
        background-color: #6F5499;
    }
    
    #review {
        text-align: justify;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
    }
    
   
    
    .border {
        border: 1px solid black;
        padding: 20px 45px 80px 45px;
        background-color: #F1F2ED;
    }
    
    textarea#styled {
        border: 3px solid #cccccc;
        padding-left: 10px;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
    }
    
    a {
        text-decoration: none;
        color: #1ab188;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }
    
    a:hover {
        color: #179b77;
        text-decoration: none;
    }
    
    .form {
        background: rgba(19, 35, 47, 0.9);
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
    
    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }
    
    .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: rgba(160, 179, 176, 0.25);
        color: #a0b3b0;
        font-size: 20px;
        float: left;
        width: 50%;
        text-align: center;
        cursor: pointer;
        -webkit-transition: .5s ease;
        transition: .5s ease;
    }
    
    .tab-group li a:hover {
        background: #179b77;
        color: #ffffff;
    }
    
    .tab-group .active a {
        background: #1ab188;
        color: #ffffff;
    }
    
    .tab-content > div:last-child {
        display: none;
    }
    
    label {
        position: absolute;
        -webkit-transform: translateY(6px);
        -ms-transform: translateY(6px);
        transform: translateY(6px);
        left: 13px;
        color: rgba(255, 255, 255, 0.5);
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        -webkit-backface-visibility: hidden;
        pointer-events: none;
        font-size: 22px;
    }
    
    label .req {
        margin: 2px;
        color: #1ab188;
    }
    
    label.active {
        -webkit-transform: translateY(50px);
        -ms-transform: translateY(50px);
        transform: translateY(50px);
        left: 2px;
        font-size: 14px;
    }
    
    label.active .req {
        opacity: 0;
    }
    
    label.highlight {
        color: #ffffff;
    }
    
    input,
    textarea {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        color: #ffffff;
        border-radius: 0;
        -webkit-transition: border-color .25s ease, box-shadow .25s ease;
        transition: border-color .25s ease, box-shadow .25s ease;
    }
    
    input:focus,
    textarea:focus {
        outline: 0;
        border-color: #1ab188;
    }
    
    textarea {
        border: 2px solid #a0b3b0;
        resize: vertical;
    }
    
    .field-wrap {
        position: relative;
        margin-bottom: 40px;
    }
    
    .top-row:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .top-row > div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }
    
    .top-row > div:last-child {
        margin: 0;
    }
    
    
    
    .button:hover,
    .button:focus {
        background: #179b77;
    }
    
    .button-block {
        display: block;
        width: 100%;
    }
    
    .forgot {
        margin-top: -20px;
        text-align: right;
    }

    .hitbtn {
        position: relative;
        background: black;
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
    <style>
    #map-canvas {
        width: 280px;
        height: 280px;
        background-color: #CCC;
    }
    </style>

  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">DEED INDEED</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="causes.php" class="nav-link">NGOs</a></li>
          <li class="nav-item"><a href="donate.html" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

      <div class="hero-wrap" style="background-image: url('images/ngobg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Let's make the world a better place</h1>
            

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
          </div>
        </div>
      </div>
    </div>
            <div class="container-fluid" style="padding-left: 40px; padding-right: 40px">
                <h1 style="text-align: center;"> <?php 
            if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                    $result= mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['college_name']; 
                } ?></h1>
                <div class="row">
                    <br>
                    <br>
                    <div class="col-md-12">
                        <h2>Mission</h2>
                        <p style="color: grey">
                            <?php 
                                if(isset($_GET['id']))
                                    {
                                        $id=$_GET['id'];
                                        $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                        $result= mysqli_query($conn,$query);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['preface']; 
                                    }
                             ?>
                        </p>
                        <br>
                        <h2>Vision</h2>
                        <p style="color: grey"><?php 
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                $result= mysqli_query($conn,$query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['campus']; 
                            } ?></p>
                        <br>
                        <h2>History</h2>
                        <p style="color: grey"><?php 
                                if(isset($_GET['id']))
                                {
                                    $id=$_GET['id'];
                                    $query= "SELECT * FROM college_list WHERE clg_id= ".$id." LIMIT 1";
                                    $result= mysqli_query($conn,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['hostel']; 
                                } ?>
                        </p>  
                        
                    </div>
                     <div class="col-md-1">
            </div>
            <div class="col-xs-10 col-md-3" style="text-align: center;">
               <section>
               <?php  if(isset($_SESSION['user_id']) && isset($_GET['id']))
                        {
                            if(isset($_POST['review']))
                            {
                               
                                $user_id= $_SESSION['user_id'];
                                $review= mysqli_real_escape_string($conn,htmlentities($_POST['review']));
                                $id = $_GET['id'];
                                $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $time = date('dS F,Y | g:i:s A');
                                if(!empty($review))
                            {
                                $review_query = "INSERT INTO review(review,clg_id,user_name,time) VALUES ('{$review}', '{$id}','{$user_name}','{$time}')";
                                $result_review = mysqli_query($conn,$review_query);
                                }
                            }
                         ?> 
                    
                    <div class="morph-button morph-button-overlay morph-button-fixed">
                        <button type="button" style="border-radius: 2px; margin-left: 545px">Write a Review</button>
                         <div class="morph-content">
                            <span class="icon icon-close"></span>
                            <div class="container-fluid">
                                <div class="col-md-12" style="margin-top: 40px; text-align: center;">
                                    <img src="assets/images/review.png" style="float: middle;">
                                    <p style="font-family: 'raleway', sans-serif; font-size: 30px; text-align: center;"><strong>Write a Review</strong></p>
                                    <br>
                                    <form name="sent-message" id="contactForm" method= "POST" action="review.php?id=<?php echo urlencode($id); ?>">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <form action="review.html">
                                                        <textarea class="form-control" placeholder="Post a Review..." id="styled" name= "review" rows="8" required></textarea>
                                                        <br>
                                                        <button type="submit" class="hitbtn" style="text-align: center;">SUBMIT</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                            </div>
                             <?php 
                        } 
                   
                        ?>
                            
                </section>
            </div>
            
                    <?php 
              if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query_date = "SELECT * FROM final_list WHERE clg_id= ".$id." LIMIT 1";
                    $result_date = mysqli_query($conn,$query_date);
                    $row = mysqli_fetch_assoc($result_date);
                    $p=explode(" ",$row['rank']);
                     }
             ?>  
                    <p style="color: white; text-align: center;">Rank :<?php if($p[0]==-1) echo "Not Available"; else echo $p[0];  ?> </p>
                </div>
                
                    <?php 
                                    if(isset($_GET['id']))
                                        {
                                            $id=$_GET['id'];
                                            $query= "SELECT * FROM college_contact WHERE clg_id= ".$id." LIMIT 1";
                                            $result= mysqli_query($conn,$query);
                                            $row = mysqli_fetch_assoc($result);
                                            $p=explode("-",$row['address']); 
                                            $q= $row['number'];
                                            $email = $row['email']; 
                                        }  ?> 
                    <h2>Contact Info:</h2> <?php for($i=0;$i<sizeof($p); $i++) { ?>
                    <p style="color: grey"><?php echo $p[$i]; ?></p> <?php } ?>  
                    <p style="color: grey">Phone: <?php  echo $q; ?></p>
                    <p style="color: grey"><a href="mailto:<?php echo $email; ?>" style="text-decoration: none;">Email: <?php echo $email; ?></a></p>
                    
                </div>
            </div>
        </div>
    </div>

            
            <?php 
              if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query_date = "SELECT * FROM dates WHERE clg_id= ".$id." LIMIT 1";
                    $result_date = mysqli_query($conn,$query_date);
                    $row = mysqli_fetch_assoc($result_date);
                     }
             ?>  

            
               <?php
            //session_start();
            if(!isset($_SESSION['user_id']))
            {  
               ?>
        <div class="logintoask">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                        <a href="login.php?id=<?php echo urlencode($id);?>"><button type="submit" class="hitbtn" style="text-align: center;">Login to Ask a Question</button></a>
                    </div>  
                </div>
            </div>
        </div>
        <?php } ?>
        <?php
            //session_start();
            if(isset($_SESSION['user_id']) && isset($_GET['id']))
            {  ?>
         <div class="logintoask">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                        <a href="logout.php"><button type="submit" class="hitbtn" style="text-align: center;">LOGOUT</button></a>
                    </div>  
                </div>
            </div>
        </div>
                        <?php 
                        $id = $_GET['id'];
                        if(isset($_POST['ask'])&& isset($_SESSION['user_id']))
                        {
                            $id = $_GET['id'];
                            $user_id = $_SESSION['user_id'];
                            $user_query= "SELECT * FROM login WHERE id='{$user_id}'";
                                $result_user = mysqli_query($conn,$user_query);
                                $row = mysqli_fetch_assoc($result_user);
                                $user_name= $row['username'];
                                $time = date('dS F,Y | g:i:s A');
                            $question_ask = mysqli_real_escape_string($conn,htmlentities($_POST['ask'])); 
                            if(!empty($question_ask))
                            { 
                                $question_query = "INSERT INTO question(questiondb,cid,user_name,time) VALUES ('{$question_ask}', '{$id}','{$user_name}','{$time}')";
                                $result_question = mysqli_query($conn,$question_query);
                                }   
                         }
                    ?>
                         <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9">
                    <br>
                        <form action="review.php?id=<?php echo urlencode($id); ?>" method= "POST">
                            <textarea type="text" name="ask" style="color:black;" placeholder="Ask your doubts here .." rows="7" class="form-control autogrow" id="styled" required></textarea> 
                            <br>
                            <button type="submit" class="hitbtn" style="text-align: center;">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php }  // session ?> 

            <div class="space" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="col-md-2">
            </div>
            <div class="col-md-8" style="margin-top: 30px;">
                <h2 >Question and Answers</h2>
                <br>
                 <?php  
        if(isset($_GET['id'])) {
        if(isset($_SESSION['user_id']) || !isset($_SESSION['user_id']))      
         {  $id= $_GET['id'];
            
                                 $question_query= "SELECT * FROM question WHERE cid='{$id}'";
                                    $result_question = mysqli_query($conn,$question_query);  
                                    while($row = mysqli_fetch_assoc($result_question)) { $question=$row['questiondb']; $qid =$row['qid']; ?> 
                <div class="here" id="data">
                    <hr>
                    <div style="display:inline-block; vertical-align:bottom;">
                        <img src="assets/images/user64x.png" class="img-circle" width="50px" height="50px">
                    </div>
                    <div style="display:inline-block; vertical-align: top;">
                        <h3 style="color: #2D2D2D; padding-left: 10px; text-transform: capitalize;"><b><?php echo $row['user_name']; ?></b></h3>
                        <i style="padding-left: 10px; color: black;"><?php echo $row['time']; ?></i>
                    </div>
                    <br>
                    <br>
                    <div class="ques" style="margin-left: 60px;">
                        <a href="question.php?qid=<?php echo urlencode($qid);?>&<?php echo urlencode($question);?>"><?php echo $row['questiondb']; ?></a>
                    </div>
                </div>
                <?php } }  } ?>
                <hr>
            </div> 
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
              <h2 class="ftco-heading-2">Have a Questions?</h2>
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
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/uiMorphingButton_fixed.js"></script>
    <script>
    (function() {
        var docElem = window.document.documentElement,
            didScroll, scrollPosition;

        // trick to prevent scrolling when opening/closing button
        function noScrollFn() {
            window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
        }

        function noScroll() {
            window.removeEventListener('scroll', scrollHandler);
            window.addEventListener('scroll', noScrollFn);
        }

        function scrollFn() {
            window.addEventListener('scroll', scrollHandler);
        }

        function canScroll() {
            window.removeEventListener('scroll', noScrollFn);
            scrollFn();
        }

        function scrollHandler() {
            if (!didScroll) {
                didScroll = true;
                setTimeout(function() {
                    scrollPage();
                }, 60);
            }
        };

        function scrollPage() {
            scrollPosition = {
                x: window.pageXOffset || docElem.scrollLeft,
                y: window.pageYOffset || docElem.scrollTop
            };
            didScroll = false;
        };

        scrollFn();

        var el = document.querySelector('.morph-button');

        new UIMorphingButton(el, {
            closeEl: '.icon-close',
            onBeforeOpen: function() {
                // don't allow to scroll
                noScroll();
            },
            onAfterOpen: function() {
                // can scroll again
                canScroll();
                // add class "noscroll" to body
                classie.addClass(document.body, 'noscroll');
                // add scroll class to main el
                classie.addClass(el, 'scroll');
            },
            onBeforeClose: function() {
                // remove class "noscroll" to body
                classie.removeClass(document.body, 'noscroll');
                // remove scroll class from main el
                classie.removeClass(el, 'scroll');
                // don't allow to scroll
                noScroll();
            },
            onAfterClose: function() {
                // can scroll again
                canScroll();
            }
        });
    })();
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
    $('.form').find('input, textarea').on('keyup blur focus', function(e) {
        var $this = $(this),
            label = $this.prev('label');
        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {
            if ($this.val() === '') {
                label.removeClass('highlight');
            } else if ($this.val() !== '') {
                label.addClass('highlight');
            }
        }
    });
    $('.tab a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        target = $(this).attr('href');
        $('.tab-content > div').not(target).hide();
        $(target).fadeIn(600);
    });
    </script>
            <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                 if(!$result)
                    {
                        die('Error, Please Try Again');  
                    }
          }
         }
    } 
?>
