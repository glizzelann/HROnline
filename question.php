<?php

	session_start();

	

	$_SESSION['newapp'] = 'new';

	include('connect.php');

	

?>

<!DOCTYPE html>

<html>
<style type="text/css">
	.img{

		position: absolute;

		top: 350px;

		left: 8%;

		right: 5%;

		z-index: 0;

		background-attachment: fixed;

		background-position: center;



	}



</style>

<head>

	<title>Application Form</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

	<link rel="shortcut icon" href="favicon.ico" />	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">

	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">

	<link rel="stylesheet" type="text/css" href="css/ripples.css">

	<link rel="stylesheet" type="text/css" href="css/inputmask.css">

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

	<!-- Javascript file -->

	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/material.js"></script>

	<script type="text/javascript" src="js/angular.js"></script>

	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

	<script type="text/javascript" src="js/jquery.dropdown.js"></script>

	<script type="text/javascript" src="js/inputmask.js"></script>

	<script type="text/javascript" src="js/jquery.inputmask.js"></script>

</head>
<body>
	<div class="card container" id="questioncon">
		<h6 style="padding-top: 30px"><i class="fa fa-book"></i><b>Question</b></h6>
		<div class="row col-md-12">
			<form action = "" method="post">
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="name">Candidate Name:</label>
				            </div>
				        </div>
				        <div class="col-md-8">
				            <input type="text" class="form-control" id="name" name="name" placeholder="Candidate Name" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="cntactno">Contact Number:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Contact Number" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="email">Email:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="position">Position Applying for:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="position" name="position" placeholder="Position Applying for" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="source">Source:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="source" name="source" placeholder="Source" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="years">Years of Experience:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="yrsofex" name="yrsofex" placeholder="Years of Experience" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="years2">Years of Experience:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="yrsofex2" name="yrsofex2" placeholder="Years of Experience" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="company">Company Name:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label class="form-group label-floating" for="company2">Company Name:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="company2" name="company2" placeholder="Company" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="date">Date:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="date" name="date" placeholder="Date" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label class="form-group label-floating" for="date2">Date:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="date2" name="date2" placeholder="Date" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="account">Account:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="account" name="account" placeholder="Account" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="account2">Account:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="account2" name="account2" placeholder="Account" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="lineofbusiness">Line of Business:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="lineofbusiness" name="lineofbusiness" placeholder="Line of Business" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="lineofbusiness2">Line of Business:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="lineofbusiness2" name="lineofbusiness2" placeholder="Line of Business" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="role">Role:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="role" name="role" placeholder="Role" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="role2">Role:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="role2" name="role2" placeholder="Role" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="row col-md-12">
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="reason">Reason For Leaving:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="reason" name="reason" placeholder="Reason For Leaving" value="">
				        </div>
				        <div class="col-md-2">
				        	<div class="form-group label-floating">
				            	<label for="reason2">Reason For Leaving:</label>
				            </div>
				        </div>
				        <div class="col-md-3">
				            <input type="text" class="form-control" id="reason2" name="reason2" placeholder="Reason For Leaving" value="">
				        </div>
				    </div>
				</div>
				<div class="form-group">
					<div class="row col-md-12">
						<?php
						include 'connect.php';
						
						$errormsg="";


						$cnts_res = $conn->query("SELECT * from tbl_interviewquestion");
						$row_cnts = $cnts_res->num_rows;
						echo'<input type="hidden" id="interviewquestion_count" name="interviewquestion_count" value="'.$row_cnts.'">';
						$cnts = 1;
						while($row4 = $cnts_res->fetch_assoc()) {
							$question = utf8_encode($row4['interviewquestion']);
							echo'<div class="form-group">
								<div class="form-group label-floating">
								  <label for="question<b>'.$cnts.'</b>" style=""><b> '.$cnts.'. </b>'.$question.'</label>
								  <textarea class="form-control" rows="5" name="questions'.$cnts.'" id="questions'.$cnts.'" ></textarea>
								
								 
								</div>
							</div>
								<br>';
								if (isset($_POST['interviewquestionbtn1'])) {
									//echo "<script>window.close();</script>";
									$questions = $_POST['questions'.$cnts.''];
									//$myID = $_POST['ref_number'];
									$type = $_POST['type'];
									$sqlInsert = "INSERT INTO `tbl_answer`  (Applicant_ID,Answer, interview_ID, Apptype) VALUES ('$myID','$questions','$cnts','$type')";
	
									$result = $conn->query($sqlInsert);
									if ($result){
										$errormsg ="Answers Submitted Successfully!";
									}else{
										$errormsg="Error!";
									}
									echo '<script type="text/javascript">alert("'.$errormsg.'");
									window.close();</script>';
								}	
								$cnts++;	
						}
						?>	
					</div>
				    
				</div>
				<div class="modal-footer">
				    <div class="form-group">
						<input type="submit" value = "Submit" name="interviewquestionbtn1" id ="interviewquestionbtn1" class="btn btn-primary" onclick="document.getElementById('container6')">
						<p> <span style="color:green"><?php ;?></span> </p>
					</div>
				    
				</div>	
			</form>
		</div>
	</div>
</body>
</html>