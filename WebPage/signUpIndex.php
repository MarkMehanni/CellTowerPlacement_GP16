<!DOCTYPE html>
<html lang="en">
<head>
	<title> Engineer Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type= "text/css" href="/CellTowerPlacement_GP16/WebPage/style3.css">

</head>
<body style="background-image: linear-gradient(to bottom right,white, #808000);">
	  
	  	<div class="header">
		<h1>
			<a href="home.php" class="logo">CTP monitor <img class="lemon" src="/CellTowerPlacement_GP16/WebPage/CellTower2.svg"></a>
		</h1>
	</div>
	<div class="signUpForm">
            <img src="/CellTowerPlacement_GP16/WebPage/userIcon.png" class="userImg">
			<form  method="post" action="signUp.php" >
				<h1> Sign Up Now </h1>

				
				<input type = "text" id ="username" name ="username" placeholder="Username" class ="inputBox" required>
				<br>

				<input type = "text" name ="lastname" placeholder="Last Name" class ="inputBox" required>
				<br>
							
				<input type="tel"  id="phone" name="phone" placeholder="phone 010-123-45678" class ="inputBox" pattern="[0-9]{3}[0-9]{3}[0-9]{5}" required>
				<br>				
								
				<input type = "text" id="email" name ="email" placeholder="Email: someone@example.com" class ="inputBox"  required>
				<br>
						
				<input type = "password" id="password" name ="password" placeholder="Password" class ="inputBox"  required>		
				<br>
				
				<input type="date"  id="dateofbirth" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"
					 class="inputBox" name="dateofbirth" placeholder="Date Of Birth: YYYY-MM-DD" required >
				
				<input type="radio" id="female" name="gender" value="female"> Female<br>
				<input type="radio" id="male"  name="gender" value="male"> Male<br>

				<p><span><input type="checkbox"required></span> I agree to the terms of service </P>
				
				<button type="submit" formaction="signUp.php" class="signUp_button" id="submitbtn" name="submit"> Register </button>
				<hr>
				<p class="or"> OR </p>
				<p>Have an account? <a href="logg.php">Log In Now </a></P>
		</form>
			
				
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/bootstrap/js/popper.js"></script>
	<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/select2/select2.min.js"></script>
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
	<script src="./vendor/daterangepicker/moment.min.js"></script>
	<script src="./vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./js/main.js"></script>
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