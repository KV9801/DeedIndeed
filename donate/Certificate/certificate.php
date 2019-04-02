<html>
<head>
	    
    <!--link rel="stylesheet" href="../../css/style.css">-->
</head>

<body style="background-color: #F6F6F6">

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


<center>
<table border="0" cellspacing="10" cellpadding="2" background="images/cb.png">
	<tr>
		<td align="center">
		<img src="images/spacer.gif" width="800" height="85"><br>
		<h1><?php echo  $_SESSION["course"]; ?></h1>
		
		In recognition of successfully completing 20 hours<br>
		<strong>	</strong>
		
		<h2>
			<?php echo  $_SESSION["fn"]; ?><br>
			<?php echo  $_SESSION["title"]; ?>	
		</h2>
		
		<i>is hereby awarded this</i>
		
		<h3>Certificate of Completion</h3>
						
		<i>Given this day, <?php echo  $now; ?><br>
		<img src="images/spacer.gif" width="415" height="70">
		</td>
	</tr>

</table><br><br><br>
<table>
	<tr>
		<td align="center">
			<a href="../../index.php"><button class="btn btn-white px-3 py-2 mt-2">Done</button></a>
		</td>
	</tr>
</table>
</center>

</body>

</html>