</<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"WEE",Tour Planning</title>
  
<style>
  body{
  background-image: url('wp8876425.webp');
  background-repeat: no-repeat;
  margin-top: 150px;
  font-family: Helvetica;
  text-align: center;
}
.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    margin-top: 150px;
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
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="my.php" method="POST">
            <input type="text" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="password" required>
            <button type="submit" name="submit">Login</button>
            <p>Don't have an account?<a href="SignUp.php">SignUp</a></p>
        </form>
    </div>
</body>
</html>