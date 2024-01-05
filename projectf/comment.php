<!DOCTYPE html>
<html>
<head>
    <title>Comment Form</title>
	<link rel = "icon" href ="1696044905131.png" type = "image/x-icon">
	<style>
	td {
		text-align:left;
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
		function validateForm(Commenting){
			var nameVal = validateName(Commenting.name);		
			var emailVal = validateEmail(Commenting.email);
			var nicVal = validateNic(Commenting.nic);
			if(nameVal && emailVal && nicVal){
				return true;
			}
			return false;
		}
</script>

</head>
<body align="center">
    <fieldset>
	<legend>Leave a Comment</legend>
    <form action="mailto:jayasundarasanduni49@gamil.com" method="post" enctype="text/plain">
	<table align="center">
        <tr><td><label for="name">Your Name:</label></td>
        <td><input type="text" id="name" name="name" required></td></tr>

        <tr><td><label for="email">Your Email:</label></td>
        <td><input type="email" id="email" name="email" required></td></tr>
		
		<tr><td><label for="nic">NIC:</label></td>
		<td><input type="text" id="nic" name="nic" required><br>

        <tr><td><label for="category">Category:</label></td>
        <td><select id="category" name="category">
            <option value="General">General</option>
            <option value="Feedback">Feedback</option>
            <option value="Support">Support</option>
        </select><td></tr>

        <tr><td><label for="comment">Your Comment:</label></td>
        <td><textarea id="comment" name="comment" rows="30" cols="50" required></textarea><td></tr>
		
		<tr><td></td>
		<td><button type="submit" value="Submit" onclick="validateForm(CommentForm)">Submit</button> <button type="reset" value="Reset">Reset</button> <button type="submit"><a style="text-decoration: none" href="resthousebook.php">Exit</a></td></tr>
	<table>
    </form>
	</fieldset>
	
	
</body>
</html>