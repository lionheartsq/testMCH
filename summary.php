<html>
<?php 
session_start();
?>
	<head>
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="description" content="Test MCH"/>
		<meta name="keywords" content="Test MCH"/>
		<meta name="author" content="Luis García"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>			<!-- boots -->		

		<title>Test MCH</title>

	</head>

	<body>

		<div class="container" style="min-width:90%;">

			<div class="row text-justify">

				<div class="col-lg-4 col-md-4 col-xs-12">

					<h1>Test MCH</h1><br>
					
					<p>You must write your first and last name; then click on submit button. The current date and time will be attached on the form. 
						You can edit or remove registers shown on the table.
					</p>
					
					<form id="login" method = "post" action = "register.php">

						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="firstName" class="form-control input-sm chat-input" placeholder="First Name" required/><br>
						
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="lastName" class="form-control input-sm chat-input" placeholder="Last Name" required/><br>

						<p><button type="submit">Submit</button></p>
						        
					</form>

				</div>

				<div class="col-lg-8 col-md-8 col-xs-12">

					<h1>Users List</h1><br>
					
					<table class="table table-striped">
						<thead>
							<tr>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Registry Datetime</td>
								<td>Delete</td>
								<td>Edit</td>
							</tr>
						</thead>
						<tbody>
							<?php
								for($i=0; $i<count($_SESSION['register']); $i++){
							?>		
								<tr>
									<form id="edit" method = "post" action = "edit.php">
										<input type="hidden" id="id" name="id" value="<?php echo $i; ?>"/>
										<td><input type="text" id="firstName" name="firstName" class="form-control input-sm chat-input" placeholder="First Name" value="<?php echo $_SESSION['register'][$i]['firstName']; ?>" required/></td>
										<td><input type="text" id="lastName" name="lastName" class="form-control input-sm chat-input" placeholder="Last Name" value="<?php echo $_SESSION['register'][$i]['lastName']; ?>" required/></td>
										<td><input type="text" id="dateTime" name="dateTime" class="form-control input-sm chat-input" placeholder="Datetime" value="<?php echo $_SESSION['register'][$i]['dateTime']; ?>" readonly/></td>
										<td><a href="delete.php?id=<?php echo $i; ?>" target="_self">Click to delete</a></td>
										<td><button type="submit">Edit</button></td>
									</form>	
								</tr>
							<?php
								}	
							?>
						</tbody>
					</table>

				</div>	

			</div>

		</div>						

	</body>

</html>	