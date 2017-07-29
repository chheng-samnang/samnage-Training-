<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/css/bootstrap-theme.css" rel="stylesheet">
	<link href="asset/css/bootstrap-theme.min.css" rel="stylesheet">
	<style>
		a {
			color: white!important;
		}
	</style>
</head>


<body>
	<div class="container">
		<p>Lists Member in Group </p>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>User Name</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$con = mysqli_connect( "localhost", "root", "", "gsm" );
					if ( !$con ) {
					die( "Connectio faild!" . mysqli_connect_error() );
					}

					if ( isset( $_GET[ 'show_member' ] ) ) {
						$id = $_GET[ 'show_member' ];
						$sql = "SELECT * FROM store_g_and_user WHERE  g_id=$id";
						$result = mysqli_query($con,$sql);
						$i = 0;
						while ( $row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
								echo "<td>" . ( $i + 1 ) . "</td>";
								echo "<td>" . $row[ "username" ] . "</td>";
							echo "</tr>";
							$i++;
						}
					}
					?>
				</tbody>
			</table>
			<button class="btn btn-primary"><a href="http://localhost:8080/PHP/samnage(Training)/Group_Management/Add_Group.php">
			Go to Group management</a></button>
		</div>
	</div>
</body>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="asset/js/bootstrap.min.js"></script>

</html>