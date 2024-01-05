<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"WEE",Tour Planning</title>
  <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
    
    <style>



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
  background-color: white;
  color: black;
  position: fixed;
  top: 0;
  width: 100%;
  text-align: left;
  margin-left: -8px;
}

.navbar a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: Arial, sans-serif;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #04AA6D;
  color: white;
}

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-image: url('Starfish-Background.jpg');
            background-size: cover;
            background-position: center;
            color: black;
            margin-top: 100px;
            margin-bottom: 0px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px 100px 100px 80px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        button {
            background-color: #905B10 ;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }


        button:hover {
            background-color: #0056b3;
        }
        footer {
    background-color: white; /* Background color for the footer */
    color: #fff; /* Text color for the footer */
    padding: 15px; /* Add spacing inside the footer */
    text-align: center; /* Center-align the content in the footer */
  width:100%;
  height: 30px;
  margin-left: -10px;
}

footer p {
    color: black;  
}


    </style>
</head>
<body>

<header>
        <nav>
        <ul>
          <li>
             <div class="navbar">
                <img src="pngwing.com (10).png" alt="Logo">Explore Beyond Borders with Us....
                <a href="TravelingPlaces.php">Back</a>
                <a href="Vehicle.php">Next</a>
                <a href="home.php" class="active">Home</a>
             </div>
          </li>
       </ul>
      </nav>
    </header>

    <div class="container">
        <h1>Traveling Days</h1>
        <form action="Days.php" method="POST" name="dateform">
            <label for="numOfDays">Number of Days:</label>
            <input type="number" id="numOfDays" name="numOfDays" min="1" required>
            
            <label for="startDate">Starting Date:</label>
            <input type="date" id="startDate" name="startDate" required>
            <br><br>
            <button type="button" onclick="calculateTravelDates()">Submit</button>
            <div class="buttons">
           <p><input type="submit" value="Confirm"></p>
        </div>
        </form>
    </div>
    <br><br><br>
    <footer>
   <p>&copy;2023 We Tours | All Rights Reserved</p>
</footer>

    <script>
        function calculateTravelDates() {
            const numOfDays = parseInt(document.getElementById('numOfDays').value);
            const startDate = new Date(document.getElementById('startDate').value);
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + numOfDays - 1);

            alert(`You will be traveling for ${numOfDays} days, from ${startDate.toDateString()} to ${endDate.toDateString()}.`);
        }
    </script>
<script src="script.js"></script>





</body>
</html>