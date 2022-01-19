<!DOCTYPE html>
<html lang="en">
<head>
	<title>Procurement System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>


	<form method="POST" action="" >
		<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Book Request
				</span>

                <div class="wrap-input100 input100-select">
					<span class="label-input100">Year</span>
					<div>
						<select class="selection-2" name="year">
                            <option>Select Year</option>
							<option value="FE">FE</option>
							<option value="SE">SE</option>
							<option value="TE">TE</option>
							<option value="BE">BE</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Semester</span>
					<div>
						<select class="selection-2" name="semester">
                            <option>Select Semester</option>
							<option value="I">I</option>
							<option value="II">II</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Subject Name is required">
					<span class="label-input100">Subjects</span>
					<input class="input100" type="text" name="subject" placeholder="Subject Names">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Reference Book Name is required">
					<span class="label-input100">Available Reference Book Name</span>
					<input class="input100" type="text" name="refbook" placeholder="Available Reference Book Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Copies Available</span>
					<input class="input100" type="number" name="copiesAvailable" placeholder="No. of Copies Available">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Copies Required</span>
					<input class="input100" type="number" name="copiesRequired" placeholder="No. of Copies Required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Percentage of Syllabus Covered</span>
					<input class="input100" type="number" name="percentage" placeholder="No. of Percentage of Syllabus Covered">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" name="submit" class="contact100-form-btn" >
							<span>
								Request
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>



	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/bookrequest.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
<?php

require 'db.php';
if(isset($_POST["submit"]))
{
    $year = $_POST['year'];	
    $semester = $_POST['semester'];	
    $subject = 	$_POST['subject'];
    $available_reference_book_name = $_POST['refbook'];
    $no_of_copies_available	= $_POST['copiesAvailable'];
    $no_of_copies_required	= $_POST['copiesRequired'];
    $no_of_percentage_of_syllabus_covered = $_POST['percentage'];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO book_request (year, semester, subject, available_reference_book_name, no_of_copies_available, no_of_copies_required, no_of_percentage_of_syllabus_covered)
    VALUES ('$year','$semester','$subject', '$available_reference_book_name', '$no_of_copies_available', '$no_of_copies_required', '$no_of_percentage_of_syllabus_covered')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Book Requested Successfully');</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>