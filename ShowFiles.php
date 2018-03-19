<?php require('connection.php');?>
<!Doctype HTML>
<html lang="en">
<head>

	<title>Digital Assignment 3</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
</head>
<body style="margin:auto;padding:20px 300px;">
<table class="table text-center table-bordered">
	<tr class="text-center" style="background-color:#00A1D0">
		<td class="text-center" colspan="4"><h3 style="color:white">File Uploading With PHP And MySql</h3></td>
	</tr>
	<tr style="background-color:white">
		<td colspan="4"><h3 style="color:white"></h3></td>
	</tr>
	<tr style="background-color:white">
		<td colspan="4"><h4>your uploads...<u><a href="index.php">upload new files...</a></u></h4></td>
	</tr>
	<tr>
		<th class="text-center" cols="4">File Name</th>
		<th class="text-center">File Type</th>
		<th class="text-center">File Size(KB)</th>
		<th class="text-center">View</th>
	</tr>
<?php
	$query="Select * from fileupload";
	$filesResult=mysqli_query($con,$query);
	$TotalFiles=mysqli_num_rows($filesResult);
	for($i=0;$i<$TotalFiles;$i++)
	{
		$file=mysqli_fetch_array($filesResult);
?>
	<tr>
		<td><?php echo $file['filename'];?></td>
		<td><?php echo $file['filetype'];?></td>
		<td><?php echo $file['filesize'];?></td>
		<td><a href="files/<?php echo $file['filename'];?>" download>View File</a></td>
	</tr>

<?php
	}
?>
</table>
</body>
</html>



