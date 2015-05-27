<?php
$link = mysqli_connect("localhost","root","","a3") or die("Error " . mysqli_error($link));
$playername 	= 'axi92';
$fraction		= 'ADAC';
$whitelist_date = '13.03.2015';


//consultation:

$query = "SELECT * FROM players LIMIT 0, 5" or die("Error in the consult.." . mysqli_error($link));

//execute the query.

$result = $link->query($query);

//display information:
$row = mysqli_fetch_array($result);
echo '<pre>';
print_r($row);
echo '</pre>';
echo $row['cop_licenses'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Titel der Seite</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
				<A href="edit.html" >Edit Profile</A>
				<A href="edit.html" >Logout</A>
				<br>
				<p class=" text-info">May 05,2014,03:00 pm </p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $playername; ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="eMd6y52.png" class="img-circle"> </div>
							<div class=" col-md-9 col-lg-9 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Department:</td>
											<td><?php echo $fraction; ?></td>
										</tr>
										<tr>
											<td>Hire date:</td>
											<td><?php echo $whitelist_date; ?></td>
										</tr>								   
										<tr>
											<tr>
												<td>Playtime:</td>
												<td>475</td>
											</tr>
											<tr>
												<td>Home Address</td>
												<td>Kavalla</td>
											</tr>
											<tr>
												<td>Admin</td>
												<td>No</a></td>
											</tr>
											<td>Licenses:<br><br>Pilot<br>Truck</td>
											<td><br><br>Passed<br>Failed</td>
										</tr>
									</tbody>
								</table>
								<a href="#" class="btn btn-primary">My Sales Performance</a>
								<a href="#" class="btn btn-primary">Team Sales Performance</a>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
						<span class="pull-right">
							<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" async="" src="script.js"></script>
	<script type="text/javascript" async="" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" async="" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>