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

	<form action="" method="POST"><div class="container-contact100">
        
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Book Procurement
				</span>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Department</span>
					<div>
						<select class="selection-2" name="department">
                            <option>Select Department</option>
							<option value="Computer Engineering">Computer Engineering</option>
							<option value="Electronics and Telecommunication">Electronics and Telecommunication</option>
							<option value="Information Technology">Information Technology</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 input100-select">
					<span class="label-input100" >Select</span>
					<div>
						<select class="selection-2" name="stream" id="selectugpg" onchange="selectDegree()">
							<option>Select UG/PG</option>
							<option value="UG">UG</option>
							<option value="PG">PG</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				 <div class="wrap-input100 input100-select">
					<span class="label-input100">Year</span>
					<div>
						<select class="selection-2" id="selectyear" name="year" onchange="selectAcademicYear()" >
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
						<select class="selection-2" name="semester" id="semesterid">
                            <option>Select Semester</option>
							<!-- <option value="I">I</option>
							<option value="II">II</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option> -->
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				 


				<div class="wrap-input100 validate-input" data-validate="Subject Name is required">
					<span class="label-input100">Subject Name</span>
					<input class="input100" type="text" name="subject" placeholder="Enter Subject Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Reference Book Name is required">
					<span class="label-input100">Reference Book Name</span>
					<input class="input100" type="text" name="refbook" placeholder="Enter Reference Book Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Select</span>
					<div>
						<select class="selection-2" name="type">
							<option>Choose Category</option>
							<option value="Division">Division</option>
							<option value="Faculty">Faculty</option>
							<option value="Library">Library</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Divisions</span>
					<input class="input100" type="number" name="division" placeholder="Enter no. of divisions">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Percentage of Syllabus Covered</span>
					<input class="input100" type="number" name="percentage" placeholder="Enter no. of Percentage">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Required">
					<span class="label-input100">No. of Copies</span>
					<input class="input100" type="number" name="copies" placeholder="Enter no. of copies">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 input100-select">
					<span class="label-input100">Syllabus</span>
					<div>
						<select class="selection-2" name="syllabus">
							<option>In SPPU Syllabus</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<p id="demo"></p>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" name="submit" class="contact100-form-btn">
							<span>
								Procure
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
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

		function selectDegree() {
			var x = document.getElementById("selectugpg");
			var i = x.selectedIndex;
			var degree=x.options[i].text;
			if(degree=="PG")
			{
				var a = document.getElementById("selectyear");
				a.remove(1);
			}
			if(degree=="UG")
			{
				var a = document.getElementById("selectyear");
				var option = document.createElement("option");
				option.text = "FE";
				a.add(option, a[1]);
			}
		}
		function selectAcademicYear(){
			var b = document.getElementById("selectyear");
			var i = b.selectedIndex;
			var year=b.options[i].text;
			if(year=="FE")
			{
				document.getElementById('semesterid').innerText = null;
				var c = document.getElementById("semesterid");
				var option = document.createElement("option");
				option.text = "I";
				c.add(option, c[1]);
				var option = document.createElement("option");
				option.text = "II";
				c.add(option,c[2]);
			}
			if(year=="SE")
			{
				var c = document.getElementById("semesterid");
				document.getElementById('semesterid').innerText = null;
				var option = document.createElement("option");
				option.text = "III";
				c.add(option, c[1]);
				var option = document.createElement("option");
				option.text = "IV";
				c.add(option,c[2]);
				
			}
			if(year=="TE")
			{
				var c = document.getElementById("semesterid");
				document.getElementById('semesterid').innerText = null;
				var option = document.createElement("option");
				option.text = "V";
				c.add(option, c[1]);
				var option = document.createElement("option");
				option.text = "VI";
				c.add(option,c[2]);
			}
			if(year=="BE")
			{
				var c = document.getElementById("semesterid");
				document.getElementById('semesterid').innerText = null;
				var option = document.createElement("option");
				option.text = "VII";
				c.add(option, c[1]);
				var option = document.createElement("option");
				option.text = "VIII";
				c.add(option,c[2]);
			}
		}
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
<?php

require 'db.php';

if(isset($_POST["submit"]))
{

$years = $_POST['year'];
$semester =	$_POST['semester'];
$department = $_POST['department'];
$stream = $_POST['stream'];
$subject = $_POST['subject'];
$reference_book_name = $_POST['refbook'];
$type = $_POST['type'];
$no_of_divisions = $_POST['division'];
$no_of_percentage_of_syllabus_covered =	$_POST['percentage'];
$no_of_copies = $_POST['copies'];
$insyllabus=$_POST['syllabus'];
$requiredcopies=0;
$remaincopies=0;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function Procure(){
 // echo "hello";
  
}


if($type=="Division")
{
  if($no_of_percentage_of_syllabus_covered>75)
    $requiredcopies=$no_of_divisions*5;
  if($no_of_percentage_of_syllabus_covered>50 && $no_of_percentage_of_syllabus_covered<74)
    $requiredcopies=$no_of_divisions*3;
  if($no_of_percentage_of_syllabus_covered>30 && $no_of_percentage_of_syllabus_covered<49)
    $requiredcopies=$no_of_divisions*2;
  if($no_of_percentage_of_syllabus_covered<30)
    $requiredcopies=$no_of_divisions*1;    
}

if($type=="faculty")
  $requiredcopies=$no_of_divisions*1;    

if($type=="Library")
  $requiredcopies=$no_of_divisions*1;

if($no_of_copies<=$requiredcopies){
  $remaincopies=$requiredcopies-$no_of_copies;
  echo "<script>alert('We Can Procure more  $remaincopies Copies');</script>";
  $sql = "INSERT INTO book_procurement (year, semester, department,stream, subject, reference_book_name, type, no_of_divisions, no_of_percentage_of_syllabus_covered, no_of_copies,required_copies,remaining_copies,Insyllabus) VALUES ('$years', '$semester', '$department','$stream', '$subject',	'$reference_book_name', '$type', '$no_of_divisions', '$no_of_percentage_of_syllabus_covered', '$no_of_copies','$requiredcopies','$remaincopies','$insyllabus')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Book procured Successfully');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
if($no_of_copies>$requiredcopies)
  echo "<script>alert('No of Copies Should be less than Required Copies');</script>";
if($no_of_copies==0){
  $remaincopies=$requiredcopies-$no_of_copies;
  echo "<script>alert('We Can Procure more  $remaincopies Copies');</script>";
  $sql = "INSERT INTO book_procurement (year, semester, department,stream, subject, reference_book_name, type, no_of_divisions, no_of_percentage_of_syllabus_covered, no_of_copies,required_copies,remaining_copies,Insyllabus) VALUES ('$years', '$semester', '$department','$stream', '$subject',	'$reference_book_name', '$type', '$no_of_divisions', '$no_of_percentage_of_syllabus_covered', '$no_of_copies','$requiredcopies','$remaincopies','$insyllabus')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Book procured Successfully');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


mysqli_close($conn);
}

?>
