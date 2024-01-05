<html>
<head>
  <title>"WEE",Tour Planning</title>
<style>
body{
  background-image: url('wp8876425.webp');
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 150px;
  font-family: Helvetica;
}
.register-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 25px;
    width: 300px;
    margin: 0 auto;
    margin-top: 60px;
}
h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: white;
}

button {
    background-color: #005ce6;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    width: 300px;
}
a:link {
  text-decoration: none;
}
</style>
 
<body align="center">
<div class="register-container">
        <h2>SignUp</h2>
        <form action="reg.php" method="POST" id="signForm">
			<label for="email"></label>
			<input type="text" id="email" name="email" placeholder="Email"><br>
			<label for="password"></label>
			<input type="password" id="password" name="password" placeholder="password"><br><br>
			<button type="submit" value="SUBMIT" name="submit">SignUp</button>
      <p>Already have an account?<a href="login.php">Login</a></p>
        </form>
 </div>
<br>		
<p style="color: black;">By signing up, you agree to our terms of services & <a href="https://www.termsfeed.com/live/b39c1b90-3f7e-4a20-8af1-a6febc297641">Privacy Policy</a></p>	

<script>
  document.getElementById('signForm').addEventListener('submit', function(event) {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;

  if (!validateEmail(email)) {
    alert('Please enter a valid email address');
    event.preventDefault(); // Prevent form submission
  }

  if (!validatePassword(password)) {
    alert('Password must be at least 8 characters');
    event.preventDefault(); // Prevent form submission
  }
});

function validateEmail(email) {
  // Regular expression for basic email validation
  var emailPattern = /\S+@\S+\.\S+/;
  return emailPattern.test(email);
}

function validatePassword(password) {
  return password.length >= 8;
}

</script>

</body>
</html>