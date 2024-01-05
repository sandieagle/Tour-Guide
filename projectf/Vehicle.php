<html>
<head>
    <title>"WEE",Tour Planning</title>
  <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
    
</head>
<style>
body {
    background-image: url("wp7808039.png"); 
    background-size: cover;
    margin-top: 100px;
    margin-bottom: 2px;
}

header {
          
            color: #fff;
            text-align: left;
            font-family: Lucida Handwriting, Cursive;
            font-size: 15px;
        }

header img {
            max-width: 4%;
        }

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: right;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

.navbar {
  overflow: hidden;
  background-color: black;
  color: white;
  position: fixed;
  top: 0;
  width: 100%;
  text-align: left;
  margin-left: -8px;
}

.navbar a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: Arial, sans-serif;
}

.navbar a:hover {
  background: #bfbfbf;
  color: white;
}

.navbar a.active {
  background-color: #04AA6D;
  color: white;
}

table{
  background-color: rgba(0,0,0,0.8);
  width: 500px;
  height: 500px;
  text-align: center;
  font-family: Garamond;
  font-size: 20px;
  color: white;
}

input[type=submit]{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 20px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.footer {
    background-color: #333; /* Background color for the footer */
    color: #fff; /* Text color for the footer */
    padding: 20px; /* Add spacing inside the footer */
    text-align: center; /* Center-align the content in the footer */
  left: 0;
  bottom: 0;
  width:100%;
}

.footer p {
    margin: 0; /* Remove default margin for the paragraph inside the footer */  
}
</style>

<body>
  <header>
        <nav>
        <ul>
          <li>
             <div class="navbar">
                <img src="pngwing.com (10).png" alt="Logo">Explore Beyond Borders with Us....
                <a href="TravelingDays.php">Back</a>
                <a href="resthouse.php">Next</a>
                <a href="home.php" class="active">Home</a>
             </div>
          </li>
       </ul>
      </nav>
    </header>
<div class="row">
<div class="column">
    <p align="left" style="color: white; font-size: 35px; font-family: Times New Roman; text-shadow: 2px 2px 8px black; margin-top: 80px;"><strong>"Explore Your Ride, Find the Perfect Vehicle for Your Journey! Browse our diverse selection of vehicles tailored to your travel needs, from compact cars to spacious vans. Select your ideal ride for comfort, adventure, or group trips, and hit the road with confidence!"</strong></p>
</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="column">
<table align="right">
  <tr>
    <td>
<form action="Vtype.php" method="POST">
<p style="font-size: 30px;"><big><b>Vehicle Type</b></big></p>
<label for="vehicle">Do you want a vehicle to travel?</label><br>
        <input type="radio" name="vehicle_choice" value="Yes"> Yes<br>
        <input type="radio" name="vehicle_choice" value="No"> No<br><br>

        <label for="vehicle-type">Choose a Vehicle:</label>
        <select name="vehicle_type">
            <option value="Car">Car</option>
            <option value="Van">Van</option>
            <option value="Bus">Bus</option>
            <option value="train">train</option>
            <option value="cab">cab</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</td>
</tr>
</table>
</div>
</div>
<br><br><br><br><br>
<div class="footer">
   <p>&copy;2023 We Tours | All Rights Reserved</p>
</div>
</body>


	
</html>