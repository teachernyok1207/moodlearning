<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sample CRUD - MoodLearning</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
		<div class="row justify-content-center align-self-center">
			<!-- Card for Entering New Data -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						Add New Record
					</div>
					<div class="card-body">
						<form method="POST">
							<div class="form-group">
								<label for="fname">Full name: </label>
								<input class="form-control form-control-sm" type="text" name="fname" required>
							</div>
							<div class="form-group">
								<label for="email">E-mail Adress: </label>
								<input class="form-control form-control-sm" type="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="contact">Contact Number: </label>
								<input class="form-control form-control-sm" type="text" name="contact" required>
							</div>
							<br>
							<center>
								<input type="submit" class="btn btn-primary" name="submit" value="Submit New Record">
								<a href="/home/all_details" class="btn btn-secondary">Return to List</a>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>