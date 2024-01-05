<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="styles2.css">
    <script src="script.js" defer></script>
	
    <title>"WEE",Tour Planning</title>
	<link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
	
	<script>
		function validateName(fname){
			if(fname==""){
				alert("You must enter your name to this form");
				return false;
			}
			return true;
		}
		function validateEmail(femail){
			var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
			if(femail.value.match(mailformat)){
				return true;
			}
			else{
				alert("You have entered an invalid email address!");
				return false;
			}
		}
		function validateNic(fnic){
			if(fnic==""){
				alert("You must enter your nic to this form");
				return false;
			}
			return true;
		}
		function validateForm(resthousebookForm){
			var nameVal = validateName(resthousebookForm.name);		
			var emailVal = validateEmail(resthousebookForm.email);
			var nicVal = validateNic(resthousebookForm.nic);
			if(nameVal && emailVal && nicVal){
				return true;
			}
			return false;
		}
	</script>
	
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
				<div class="navbar">
				  <img src="pngwing.com (10).png" id="logo" align="left" height="54px" width="120px">
				  <a href="resthouse.php">Back</a>
                  <a href="additional.php">Next</a>
				  <a href="home.php" class="active">Home</a>
				</div>
				</li>
            </ul>
        </nav>
    <h1><strong>Rest House Booking</strong></h1>
    </header>
	
	<!-- Sidebar -->
	<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%" style="height:50%">
	  <h3 class="w3-bar-item">Menu</h3>
	  <a href="payment.php" class="w3-bar-item w3-button"><p><i class="arrow right"></i>&nbsp Payments</p></a><br>
	  <a href="resthouse.php" class="w3-bar-item w3-button"><p><i class="arrow right"></i>&nbsp Rest Houses</p></a><br>
	  <a href="additional.php" class="w3-bar-item w3-button"><p><i class="arrow right"></i>&nbsp Additional</p></a>
	</div>

    <main>
		<table>
		<tr>
			<td>
			<h2>Book a Rest House</h2>
			
		<form method="POST" action="resthousebooking.php">
			<label for="nic">Name:</label>
			<input type="text" id="name" name="name" required><br>
			
			<label for="nic">NIC:</label>
			<input type="text" id="nic" name="nic" required><br>
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br>

			<label for="restHouse">Select a Rest House:</label>
			<select id="restHouse" name="restHouse" required>
				<option value="Rest House 1">Rest House 1</option>
				<option value="Rest House 2">Rest House 2</option>
				<option value="Rest House 3">Rest House 3</option>
				<option value="Rest House 4">Rest House 4</option>
				<option value="Rest House 5">Rest House 5</option>
				<option value="Rest House 6">Rest House 6</option>
				<option value="Rest House 7">Rest House 7</option>
				<option value="Rest House 8">Rest House 8</option>
				<option value="Rest House 9">Rest House 9</option>
				<option value="Rest House 10">Rest House 10</option>
				<option value="Rest House 11">Rest House 11</option>
				<option value="Rest House 12">Rest House 12</option>
				<option value="Rest House 13">Rest House 13</option>
				<option value="Rest House 14">Rest House 14</option>
				<option value="Rest House 15">Rest House 15</option>
				<option value="Rest House 16">Rest House 16</option>
			</select><br>

			<label for="checkIn">Check-In Date:</label>
			<input type="date" id="checkIn" name="checkIn" required><br>

			<label for="checkOut">Check-Out Date:</label>
			<input type="date" id="checkOut" name="checkOut" required><br>
								
			<div class="center">
				<button type="submit" value="SUBMIT" name="submit">Book Now</button>
			</div>
			</form>
			</td>
		</tr>
		</table>
    </main>
	<br><br><br>
	
	<footer class="footer">
		<ul class="menu">
		  <li class="menu__item"><a class="menu__link" href="#"><p style="margin-left:-50px">Contact</p></a><br><br>
			<table align="center">
			<tr>
				<td align="center" style="padding-right:80px">
					<div class="p2"><b>BY PHONE</b></div><br>
					<div class="p3">(Monday to Friday, 9am to 4pm PST)</div><br>
					<div class="p4">Sri Lanka Toll-Free:<br>+94 11 456 8432<br><br>International:+94 11 456 8433<br></div><br></td>
				<td align="center"style="padding-right:80px">
					<div class="p2"><b>START A NEW CASE</b></div>
					<div class="p4">Just send us your questions<br>or concerns by starting a<br>new case and we will give<br>you the help you need.</div><br>
					<div class="al">
					<p class="button2"><a style="text-decoration: none" href="comment.php">START HERE</a></p></td>
					</div>
				<td align="center" style="padding-right:80px">
					<div class="p2"><b>LIVE CHAT</b></div>
					<div class="p4">Chat with a member of our<br>in-house team</div><br>
					<div class="al">
					<p class="button2">+94 758 562 189</p><br><br><br></td>
					</div>
			</tr>
			</table>
		  </li>
		</ul>
    <p>&copy;2023 We Tours | All Rights Reserved</p>
  </footer>
	
</body>
</html>