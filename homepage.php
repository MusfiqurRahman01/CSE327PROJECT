<?php include('partials/db_connect.php'); ?>

<!DOCTYPE html> <!-- Html contains two parts - head(meta, css, js) and body(contents, js) -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Learn Within</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php include('partials/navbar.php'); ?>

	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
					<form action="patientAdmissionFormSubmit.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="dateOfAdmission">Date: <span style="color: red">*</span></label>
									<input type="text" name="dateOfAdmission" class="form-control" id="dateOfAdmission" required>
								</div>

								<div class="form-group">
									<label for="name">Full name: <span style="color: red">*</span></label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>

								<div class="form-group">
									<label for="dob">Date of birth: <span style="color: red">*</span></label>
									<input type="text" name="dob" class="form-control" id="dob" required>
								</div>

								<div class="form-group">
									<label for="mobile">Mobile No: <span style="color: red">*</span></label>
									<input type="text" name="mobile" class="form-control" id="mobile" required>
								</div>

								<div class="form-group">
									<label for="presentAddress">Present address:</label>
									<textarea name="presentAddress" id="presentAddress" class="form-control" cols="30" rows="2"></textarea>
								</div>

								<div class="form-group">
									<label for="permanentAddress">Permanent address:</label>
									<textarea name="permanentAddress" id="permanentAddress" class="form-control" cols="30" rows="2"></textarea>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="profession">Interested: <span style="color: red">*</span></label>
									<select name="profession" class="form-control" id="profession" required>
										<option value="">interested in...</option>
										<option value="math">math</option>
										<option value="english">english</option>
										<option value="bangla">bangla</option>
										<option value="poem">poem</option>
										<option value="music">music</option>
										<option value="Others">Others</option>
									</select>
								</div>

								<div class="form-group">
									<label for="deposit">Age: <span style="color: red">*</span></label>
									<input type="text" name="deposit" class="form-control" id="deposit" required>
								</div>

								<div class="form-group">
									<label for="choice">Gender: <span style="color: red">*</span></label>
									<div id="choice">
										<input type="radio" name="choice" value="male" required> male &nbsp;&nbsp;
										<input type="radio" name="choice" value="female" required> female <br>
									</div>
								</div>

								<hr>
								<div class="form-group">
									<label for="refName">Favorite color: <span style="color: red">*</span></label>
									<input type="text" name="refName" class="form-control" id="refName" required>
								</div>

								<div class="form-group">
									<label for="rwPatient">Pet name: <span style="color: red">*</span></label>
									<input type="text" name="rwPatient" class="form-control" id="rwPatient" required>
								</div>
								<br>
								<p><b><span style="color: red">*</span> fields are required!</b></p>
							</div>

							<div class="col-md-12">
								<button type="submit" name="patientFormSubmit" class="btn btn-info btn-block">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php include('partials/db_close.php'); ?>
