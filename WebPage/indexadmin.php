<html lang="en">
<head>
	<title>Add Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="./images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type= "text/css" href="/CellTowerPlacement_GP16/WebPage/style3.css">
</head>
<body>

	<div class="header">
		<h1>
			<a href="sidebaradmin.php" class="logo">CTP monitor <img class="lemon" src="/CellTowerPlacement_GP16/WebPage/CellTower2.svg"></a>
		</h1>
	</div>
	
	  
<div class="signUpForm">
            <img src="/CellTowerPlacement_GP16/WebPage/userIcon.png" class="userImg">
			<form  method="post" action="submitadmin.php" >
				<h1> Add Admin </h1>

				<input type = "text" id ="username" name ="username" placeholder="Username" class ="inputBox" pattern="[A-Za-z]{3,10}[0-9]{0,4}" required>
				<br>

				<input type = "text" name ="lastname" placeholder="Full Name" class ="inputBox" pattern="[A-Za-z\s]{9,25}" title="Numbers aren't allowed!" required>
				<br>
							
				<input type="text"  id="phone" name="phone" placeholder="phone 010-123-45678" class ="inputBox" pattern="[0-9]{3}[0-9]{3}[0-9]{5}" required>
				<br>				
								
				<input type = "text" id="email" name ="email" placeholder="Email: someone@example.com" class ="inputBox" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
				<br>
						
				<input type = "password" id="password" name ="password" placeholder="Password" class ="inputBox" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"   required>		
				<br>
				
				<input type="date"  id="dateofbirth" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"
					 class="inputBox" name="dateofbirth" placeholder="Date Of Birth: YYYY-MM-DD" required >
				
				<input type="radio" id="female" name="gender" value="female" requied> Female<br>
				<input type="radio" id="male"  name="gender" value="male" required> Male<br>

								
				<button type="submit" formaction="submitadmin.php" class="signUp_button" id="submitbtn" name="submit"> Add Admin </button>
				<hr>
		</form>
	</div>

	<div id="dropDownSelect1"></div>

	<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="./vendor/animsition/js/animsition.min.js"></script>
	<script src="./vendor/bootstrap/js/popper.js"></script>
	<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
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
	<script src="./vendor/daterangepicker/moment.min.js"></script>
	<script src="./vendor/daterangepicker/daterangepicker.js"></script>
	<script src="./vendor/countdowntime/countdowntime.js"></script>
	<script src="./js/main.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>