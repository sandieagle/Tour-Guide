<html>
	<head>
	<title>"WEE",Tour Planning</title>
  <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
	
	
	<style>
	body{
		text-align: center;
		background-image: url("Untitled_Export-JrgRQ-Xyl.jpeg");
		background-repeat:no-repeat;
		background-size: 100%;
		margin-top: 50px;
		background-size: cover;
		background-position: center;
	}

	#title{
		color:#0047AB;
	}
	#description{
		color:#6F8FAF;
	}
	td{
		padding:10px;
	}
	button{
		background-color: #61B0B7;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}

	input[type=button] {
  background-color: #0047b3;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 300px;
  border-radius: 10px;
}
	
	</style>
	
	<script>
		function validateName(fname){
			if(fname==""){
				alert("You must enter your name to this form");
				return false;
			}
			return true;
		}
		function validateCon(fcontact){
			var valPass = /^(?=.*\).{10,}$/;
			if (fcontact.value.match(valPass)) {
				return true;
			}
			alert("You must enter 10 digt phone number");
			return false;
		}
		function validateEmail(femail){
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(femail.value.match(mailformat)){
				return true;
			}
			else{
				alert("You have entered an invalid email address!");
				return false;
			}
		}
		function validateAddress(faddress){
			if(faddress==""){
				alert("You must enter your address to this form");
				return false;
			}
			return true;
		}
		function validateNic(fnic){
			if(fnic==""){
				alert("You must enter your nic to this form");
				return false;
			}
			return true;
		}
	
		function validateForm(regForm){
			var nameVal = validateName(regForm.name);
			var contactVal = validateCon(regForm.contactNo);
			var emailVal = validateEmail(regForm.email);
			var addressVal = validateAddress(regForm.address);
			var nicVal = validateNic(regForm.nic);
			if(nameVal && contactVal && emailVal && addressVal && nicVal){
				return true;
			}
			return false;
		}
	</script>
	
	
	
	</head>
	
	<body>

	<header>
		<h1 id="title">Registration Form</h1>
    </header>
	
	
	<h3 id="description">Please fill this form with your correct details. These Information are helpful to us to contact you and identify you.</h3>
	
	<form action="formreg.php" method="POST" name="registerForm">
	<table align="center">
	
	<tr>
	<td>Name:</td>
	<td><input type="text" name="name" size="30"></td>
	</tr>
	
	<tr>
	<td>Contact Numbers:</td>
	<td><input type="text" name="contactNo" size="30"></td>
	</tr>
	
	<tr>
	<td>Email Address:</td>
	<td><input type="email" name="email" size="30"></td>
	</tr>
	
	<tr>
	<td>Address:</td>
	<td><input type="text" name="address" size="30">
	</td>
	</tr>
	
	<tr>
	<td>NIC:</td>
	<td><input type="text" name="nic" size="30"></td>
	</tr>
	
	<tr>
	<td>More Details</td>
	<td><textarea rows="5" cols="25" name="more"></textarea></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="SUBMIT" onclick="validateForm(registerForm)">&nbsp<input type="reset" name="reset" value="RESET"></td>
	</tr>
	
	</table>
	
	<table align="center" width="50%" cellspacing="20">
	<tr>
	<td align="center"><a href="additional.php"><input type="button" value="Back"></a></td>
	<td align="center"><a href="Payment.php"><input type="button" value="Next"></a></td>
	</tr>
	</table>
	
	</form>
	
	</body>
	
</html>
