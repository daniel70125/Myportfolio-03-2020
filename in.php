<head>
    <meta charset="UTF-8">
    <title>Succesfull!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <style>
      .main {
    width:400px;
    margin:auto;
}
h3 {
    text-align: center;
}
.footer {
    text-align: center;
    background: azure;
}
.footerp {
    margin-bottom: 5px;
    padding-top: 20px;
}
  </style>
</head>
<body>
    <div class=" container main">
<?php
	$name = $_GET['rname'];
	$email = $_GET['remail'];
	$number = $_GET['rnumber'];
	$comment = $_GET['rcomment'];
	// Database Connection code
	$servername = "localhost";
	$username = "id9154843_reg";
	$password = "myspace12";
	$dbname = "id9154843_registration";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	
		$sql = "INSERT INTO `registration`(`name`, `email`, `number`, `comment`) VALUES('$name','$email','$number','$comment');";
		if(mysqli_query($con,$sql))
		{
			echo "Information sent! I will get back to you within 24hrs";
		}
		else
		{
			echo "Something went Wrong...";
		}
	
	
	mysqli_close($con);
?>

<div style="" class="alert alert-success">
  <strong>Thanks!</strong> You have successfully submitted your purchase!
</div> 
     <p>A response team will e-mail you with a confirmation code (Wait up to 24
      hours for e-mail to arrive). If you don't recieve an e-mail in your inbox please check your
       spam folder.</p>
       <a href="index.html"><button class="btn btn-primary" >Home</button></a>
    </div>
    
    <footer style="position: fixed; bottom: 1px; width: 100%;margin-top: 20px;" class="footer">
  
  <p>©Copyright 2019 – All Rights Reserved</p>
</footer>
</body>