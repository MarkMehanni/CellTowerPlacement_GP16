
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Engineer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>




		<div class="container-contact100">
      <img  class="contact100-form"  src="images/antennas.jpg" height="500"width="100" alt="Italian Trulli">
	  </div>

	
	  
	<div class="container-contact100">
            
            
               
			<form  method="post" action="submit.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Add Engineer
				</span>

				<label class="label-input100" for="user-name">User Name</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type user name">
					<input type="text" pattern="[A-Za-z]{1,32}" id="name" class="input100" type="text" name="name" placeholder="User name" required>
					<span class="focus-input100"></span>
				</div>
				
				
				

				<label class="label-input100" for="password">Password</label>
				<div class="wrap-input100">
					<input type="password"  id="password" class="input100" name="password" placeholder="Password"required >
					<span class="focus-input100"></span>
				</div>

				
				
				
				
				<div class="container-contact100-form-btn">
					<button type="submit" formaction="submit.php" class="contact100-form-btn" id="submitbtn" name="submit">
						Submit
					</button>
				</div>
			</form>

			

	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

var uniid = document.getElementById("uni-id");
function validateid()
{

	if(uniid.value[4] != "/")
	{
	  uniid.setCustomValidity("SASA");
	}
	else
	uniid.setCustomValidity("");
}

uniid.onkeyup=validateid;

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
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