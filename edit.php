<html>

	<head>
	<link rel="stylesheet" href="css/sweetalert2.css"/>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/sweetalert2.js"></script>
	</head>

	<body>

		<?php
		session_start();

			$id=$_POST['id'];
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];

			$date = new DateTime();
			$result = $date->format('Y-m-d H:i:s');
			$dateTime=$result;

			$_SESSION['register'][$id]['firstName']=$firstName;
			$_SESSION['register'][$id]['lastName']=$lastName;
			$_SESSION['register'][$id]['dateTime']=$dateTime;

			echo "<script>
			swal({
				title: 'Well done!',
				text: 'The user has been modified',
				type: 'success',
			}).then((result) => {
				window.location = 'summary.php';
			})
			</script>";				
		?>
	
	</body>	
</html>