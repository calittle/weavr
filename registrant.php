<?php
# connect to database (perhaps via include?)	

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>VOICE &#9745;</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel=stylesheet href="css/mystyles.css"/>    
    <link href="https://fonts.googleapis.com/css?family=Lora|Raleway|Source+Code+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse">
	        <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">VOICE</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.html">Home</a></li>
                        <li class="active"><a href="user.html">Register</a></li>
                        <li><a href="#">My Account</a></li>
						<li><a href="doc/">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
				    </ul>
                </div>
	        </div>
        </nav>
        <h1 class="sr-only">Home</h1>
    </header>
	<div class="container">
	    <section>
			<div class="jumbotron">
	            <h3>Register to Vote (Page 2)</h3>
				<p>Now we need to know about you, the voter. Fill out the information below. </p>
	        </div>	
			<div class="well well-lg">
				<form method="POST" action="registrant_form.php">
					<div class="form-group">
				    	<label for="firstNameInput">First Name</label>
						<p class="help-block">Enter your first name as it appears on your government-issued identification or birth certificate.</p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-exclamation-sign"></span></span>
							<input type="text" class="form-control" id="firstNameInput" name="firstNameInput" required>
						</div>
					</div>
					<div class="form-group">
				    	<label for="middleNameInput">Middle Name</label>
						<p class="help-block">Enter your middle name as it appears on your government-issued identification or birth certificate.</p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
							<input type="text" class="form-control" id="middleNameInput" name="middleNameInput">
						</div>
					</div>
					<div class="form-group">
				    	<label for="lastNameInput">Last Name</label>
						<p class="help-block">Enter your Last name as it appears on your government-issued identification or birth certificate.</p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-exclamation-sign"></span></span>
							<input type="text" class="form-control" id="lastNameInput" name="lastNameInput" required>					
						</div>
					</div>
					<div class="form-group">
				    	<label for="suffixNameInput">Suffix</label>
						<p class="help-block">Enter your name suffix (e.g. Jr, II, etc) as it appears on your government-issued identification or birth certificate.</p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>							
							<input type="text" class="form-control" id="suffixNameInput" name="suffixNameInput">
						</div>
					</div>
					<hr class="separator">
					<div class="form-group">
				    	<label for="phoneInput">Phone Number</label>
						<p class="help-block">Just in case we need to contact you about your registration request.</p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>							
							<input type="text" class="form-control" id="phoneInput" name="phoneInput">
						</div>
					</div>
					<div class="form-group">
				    	<label for="birthDateInput">Birth date</label>
						<p class="help-block">Enter your birthdate as YYYY-MM-dd, or use the picker.</p>
						<div class="input-group date">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>							
							<input type="text" class="form-control" id="birthDateInput" name="birthDateInput" required>
						</div>
					</div>
					<div class="form-group">
				    	<label for="stateIdInput">State ID Number</label>
						<p class="help-block">Enter state identification number (ex. Driver License number) </p>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>							
							<input type="text" class="form-control" id="stateIdInput" name="stateIdInput" >
						</div>
					</div>
					<!-- uncomment if need to support another ID number (e.g. SSN, or some other scheme).-->
					<div class="form-group">
				    	<label for="fedIdInput">Last 4 digits of SSN</label>
						<p class="help-block">Please enter last four digits of your Social Security Number.</p>
						<div class="input-group date">
							<span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>							
							<input type="text" class="form-control" id="fedIdInput" name="fedIdInput" >
						</div>
					</div>
					
					<!-- Note: in a single-state implementation you could simply hard-code this value and not use this input -->
					<div class="form-group">
				    	<label for="stateInput">Registration State</label>
						<p class="help-block">Choose the state in which you are registering</p>
						<div class="input-group">
							<select class="form-control required" id="stateInput" name="stateInput" required>
								<option value="">-- Select State --</option>
<?php
/* query database to populate:
Gender
Ethnicity
Party
State
*/
echo "<option value='GA'>GA (Georgia)</option>";
echo "<option value='NC'>NC (North Carolina)</option>";
?>	
							</select>
						</div>
					</div>
					<hr class="separator">					
					<div class="form-group">
				    	<label for="ethnicityInput">Ethnicity</label>
						<p class="help-block">This question is asked to comply with federal regulations and is optional.</p>
						<div class="input-group">
							<select class="form-control" id="ethnicityInput" name="ethnicityInput">
								<option value="">-- Select Ethnicity --</option>
<?php
echo "<option value='AI'>American Indian</option>";
echo "<option value='AN'>Alaskan Native</option>";
echo "<option value='AS'>Asian</option>";
echo "<option value='BL'>Black, not of Hispanic origin</option>";
echo "<option value='HS'>Hispanic</option>";
echo "<option value='PI'>Pacific Islander</option>";
echo "<option value='WH'>White, not of Hispanic origin</option>";
?>	
							</select>
						</div>
					</div>
					<div class="form-group">
				    	<label for="genderInput">Gender</label>
						<p class="help-block">This question is asked to comply with federal regulations and is optional.</p>
						<div class="input-group">
							<select class="form-control" id="genderInput" name="genderInput">
								<option value="">-- Select Gender --</option>
<?php
echo "<option value='FEMALE'>Female</option>";
echo "<option value='MALE'>Male</option>";
echo "<option value='OTHER'>Other</option>";
?>	
							</select>
						</div>
					</div>
									
					
				  <button type="submit" class="btn btn-default">Next</button>
				</form>
			</div>  
	    </section>
	    <div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
			</div>
		</div>
    </div>
    <nav id="pagefooter" class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
        <div class="container">
            <div class="col-xs-12 text-center navbar-text">
				<p class="text-muted">Copyright &copy; 2017 <a href="mailto:little_charles1@columbusstate.edu">Charles Little</a>, All rights reserved.</p>
            </div>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js" integrity="sha256-FOV0q1Ks/eXoUwtkcN6OxWV4u9OSq7LDomNYnfF/0Ys=" crossorigin="anonymous"></script>
	<script src="https://raw.githubusercontent.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>
	
<script>
$(document).ready(function($) {
	
	$('#phoneInput').mask("(999) 999-9999");
	$('#birthDateInput').mask("9999-99-99",{placeholder:"yyyy-mm-dd}"});
	$('#fedIdInput').mask("9999");
	jQuery.validator.addMethod("lettersonly", function(value, element) {return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);}, "Letters/spaces only please.");
	$('.input-group.date').datepicker({
	    startView: 2,
	    format: "yyyy-mm-dd",
	    autoclose: true
	});
	$('form').validate({
	    rules: {
	        suffixNameInput: {
	            minlength: 1,
	            maxlength: 256,
	            required: false
	        },
	        lastNameInput: {
	            minlength: 3,
	            maxlength: 256,
	            lettersonly: true,
	            required: true
	        },
	        middleNameInput: {
	            minlength: 3,
	            maxlength: 256,
	            lettersonly: true,
	            required: false
	        },
	        firstNameInput: {
	            minlength: 3,
	            maxlength: 256,
	            lettersonly: true,
	            required: true		        
	        },
	        birthDateInput:{
		        minlength: 8,
		        maxlength: 10,
		        required: true
	        },
	        phoneInput: {required:false},
	        stateIdInput: {maxlength:256,required:false},
	        fedIdInput: {maxlength:4,required:true},
	        stateInput: {required:true}
	    },
	    highlight: function(element) {
	        $(element).closest('.form-group').addClass('has-error');
	    },
	    unhighlight: function(element) {
	        $(element).closest('.form-group').removeClass('has-error');
	    },
	    errorElement: 'span',
	    errorClass: 'help-block',
	    errorPlacement: function(error, element) {
	        if(element.parent('.input-group').length) {
	            error.insertAfter(element.parent());
	        } else {
	            error.insertAfter(element);
	        }
	    }
	});
});
</script>
    </body>
</html>
