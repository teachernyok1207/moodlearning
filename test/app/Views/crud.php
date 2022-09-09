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
			<!-- Card for Displaying Current Data -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						List of Members
					</div>
					<div class="card-body">
						<!-- Fetch All Recorded Data -->
						<table class="table">
							<thead>
								<tr>
									<th scope="col"><center>ID</center></th>
									<th scope="col"><center>Name</center></th>
									<th scope="col"><center>E-mail Address</center></th>
									<th scope="col"><center>Contact Number</center></th>
									<th scope="col"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($members as $row) {?>
									<tr>
										<td><center><?= $row['id'] ?></center></td>
										<td><center><?= $row['name'] ?></center></td>
										<td><center><?= $row['email'] ?></center></td>
										<td><center><?= $row['contact'] ?></center></td>
										<!-- Button for Action -->
										<td>
											<center>
												<a href="/home/edit_record/<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
												<a href="/home/delete_record/<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
											</center>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<center>
							<a href="/home/register" class="btn btn-primary" name="submit">Add Record</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>