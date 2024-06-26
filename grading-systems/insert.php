<?php
?>

<html>
    <head>
        <title>

        </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="insert_css.css">
    </head>

    <body>
		<div class="container">
			<div class="row justify-content-center align-items-center inner-row">
				<div class="col-md-5">
					<div class="form-box p-5">
						<h2 class="fw-bold md-3">Create New Record</h2>
						
					</div>
					<form action="save.php" method="POST">
						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Student Name" id="floatingInput" name="stud_name">
							<label for="floatingInput">Student Name</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Prelim Quiz 1" id="floatingInput" name="prelims_q1" >
							<label for="floatingInput">Prelim Quiz 1</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Prelim Quiz 2" id="floatingInput" name="prelims_q2">
							<label for="floatingInput">Prelim Quiz 2</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Prelim Class Standing" id="floatingInput" name="prelims_cs">
							<label for="floatingInput">Prelim Class Standing</label>
						</div>
						
						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Prelim Major Exam" id="floatingInput" name="prelims_exam">
							<label for="floatingInput">Prelim Major Exam</label>
						</div>
						
		
						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Midterm Quiz 1" id="floatingInput" name="midterms_q1">
							<label for="floatingInput">Midterm Quiz 1</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Midterm Quiz 1" id="floatingInput" name="midterms_q2">
							<label for="floatingInput">Midterm Quiz 2</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Midterm Class Standing" id="floatingInput" name="midterms_cs">
							<label for="floatingInput">Midterm Class Standing</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Midterm Major Exam" id="floatingInput" name="midterms_exam">
							<label for="floatingInput">Midterm Major Exam</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Final Quiz 1" id="floatingInput" name="finals_q1">
							<label for="floatingInput">Final Quiz 1</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Final Quiz 2" id="floatingInput" name="finals_q2">
							<label for="floatingInput">Final Quiz 2</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Final Class standing" id="floatingInput" name="finals_cs">
							<label for="floatingInput">Final Class Standing</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Final Major Exam" id="floatingInput" name="finals_exam">
							<label for="floatingInput">Final Major Exam</label>
						</div>

						<div class="mt-3 text-center">
							<input type="submit" name="submit" value="Submit" class = "btn btn-primary">
						</div>

					</form>
				</div>
			
			</div>
		</div>
    </body>
</html>