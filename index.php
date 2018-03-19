<?php require('connection.php');?>
<!Doctype HTML>
<html lang="en">
<head>

	<title>Digital Assignment 3</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="Design Portfolio of Dilip Agarwal" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.dilipagarwal.com" />
	<meta property="og:image" content="http://www.dilipagarwal.com/images/dilip.jpg" />
	<meta property="og:image:width" content="590" />
	<meta property="og:image:height" content="440" />
	<meta property="og:site_name" content="Dilip Agarwal | Portfolio" />
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="twitter:widgets:csp" content="on">
	<meta property='fb:app_id' content='381830641890866' />
	<meta name="description" content="I am an enthusiastic and dedicated individual looking for an opportunity to work and explore the Information Technology sector and continuously seeking opportunity to implement my coding skills in solving real life problems." />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="https://www.dilipagarwal.com/" />
	<meta property="og:description" content="I am an enthusiastic and dedicated individual looking for an opportunity to work and explore the Information Technology sector and continuously seeking opportunity to implement my coding skills in solving real life problems." />
	<meta name="twitter:card" content="website" />
	<meta name="twitter:description" content="Full Stack Programmer" />
	<meta name="twitter:title" content="About Dilip Agarwal | UI/UX Designer &amp; Front End Developer | Full Stack Programmer" />
	<meta name="twitter:site" content="@dilipagarwal001" />
	<meta name="twitter:creator" content="@dilipagarwal001" />
	<meta name="twitter:image" content="http://www.dilipagarwal.com/images/dilip.jpg">
	<meta name="keywords" content="Dilip Agarwal, vit university vellore, dilipagarwal001, github, work,, hackerrank, hackerearth, LinkedIn, contact, resume, website, portfolio, projects, skills, about, Bootstrap Portfolio , Dilip Agarwal Portfolio" />
	<meta name="author" content="dilipagarwal001">
	<meta name="email" content="contactdilipagarwal@gmail.com">
	<meta name="copyright" content="Dilip Agarwal 2018" />
	<meta property="og:description" content="I am an enthusiastic and dedicated individual looking for an opportunity to work and explore the Information Technology sector and continuously seeking opportunity to implement my coding skills in solving real life problems." />
	<meta itemprop="name" content="Dilip Agarwal">
	<meta itemprop="description" content="Full Stack Programmer.">
	<meta itemprop="image" content="http://www.dilipagarwal.com/images/dilip.jpg">
		
		
		
		
		
	
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>


	
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row text-center" style="">
			<div class="col-lg-offset-3 col-lg-7" style="box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);">
				<h2 class="text-center" style="color:grey">Digital Assignment</h3>
				<div class="row firstrow">
					<div class="col-lg-5">
						<input type="text" class="text-center" Placeholder="Enter Your Name" name="name" required />
					</div>
					<div class="col-lg-offset-2 col-lg-5 box">
						<input type="email" class="text-center" placeholder="Enter Your Email" name="email" required />
					</div>
				</div>
				
				<label for="file-upload" class="custom-file-upload">
					<i class="fa fa-cloud-upload"></i> Upload Your File Here
				</label>
				<input id="file-upload" type="file" name="file" required />
				<br>
				<small style="color:grey"><span style="color:red">*</span> File Should be image or PDF</small>
				<div class="submit">
					<button type="submit" class="" name="submit">Submit</button>
					<br>
					<p id="message" style="font-weight:bold;font-size:15px;display:none;">File Uploaded Successfully... <u><a href="ShowFiles.php">Click Here view File.</a></u></p>
				</div>
				<div class="row text-right lead" style="padding-right:30px;color:darkgrey">
					<div class="col-lg-12">
						<p class="">Dilip Agarwal</p>
						<p>--15BIT0309--</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</form>

<script></script>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$filename=$_FILES['file']['name'];
		$tmp_name=$_FILES['file']['tmp_name'];
		$filetype=$_FILES['file']['type'];
		$filesize=$_FILES['file']['size']/1000;
		$image=explode("/",$filetype)[0];
		if($image=="image" || $filetype=="application/pdf")
		{
			if($filesize<500)
			{
				$query="insert into fileupload values('$name','$email','$filename','$filetype','$filesize')";
				if(mysqli_query($con,$query))
				{
					move_uploaded_file($tmp_name,"files/".$filename);
					echo "<script>
					document.getElementById('message').style.display = ''
					
					</script>";
				}
			}
			else
			{
				echo "<script>alert('Please Upload File with less than 1MB')</script>";
			}
		}
		else
		{
				echo "<script>alert('Please Upload Only Pdf or Image Files')</script>";
		}
	}

?>


