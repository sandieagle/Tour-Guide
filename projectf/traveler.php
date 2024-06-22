<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"WEE",Tour Planning</title>
    <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
    <style>
      body{
        margin-top: 100px;
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
  color: black;
  background-color: white;
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
            background-image: url('traveler.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
      

        h1, h2, p {
            text-align: center;
        }

        label {
            font-size: 18px;
            font-weight: bold;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #00CCCC;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

	.icon{
    border-radius: 10px;
	border: 5px solid rgba(255, 255, 255, .1);
  background-color: rgba(255, 255, 255, .5);
  color: black;
	}
	

	* {
 	box-sizing: border-box;
	}

	.column {
	float: left;
 	width: 50%;
 	padding: 5px;
	}
	/* Clearfix (clear floats) */
	.row::after {
 	content: "";
 	clear: both;
 	display: table;
	}
  .form-group{
    text-align: center;
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
</head>

<body>

    <header>
        <nav>
        <ul>
          <li>
             <div class="navbar">
                <img src="pngwing.com (10).png" alt="Logo">Explore Beyond Borders with Us....
                <a href="TravelingPlaces.php">Next</a>
                <a href="home.php" class="active">Home</a>
             </div>
          </li>
       </ul>
      </nav>
    </header>

    <div class="container">
        <h1 style="color:#00CCCC">Discover Your Traveler Type</h1>
        <p> Could you please let us know if you're a local traveler or visiting Sri Lanka from a foreign country? This will help us tailor our recommendations to suit your preferences and needs. </p>
        <form action="type.php" method="POST">
            <div class="form-group">
                <label for="travelerType">Your Traveler Type:</label>
                <br><br>
                <input type="radio" name="tType" value="local">Local
                <input type="radio" name="tType" value="foreign">Foreign<br><br>
                <input type="submit" value="Submit">
            </div>
            <br>
        </form> 
    </div>
  <br><br><br><br>

    <div class="row">
     <div class="column">
    <div class="icon">
    <p align="center">
    <b>Local traveler</b><br><br>
    Local tourists are individuals who explore destinations within their own country. They are already familiar with the language, customs, and culture of their homeland. Local travel often involves short getaways or day trips to nearby attractions,  and appreciate the beauty of their own region.<br>
    </p><br>
    </div>
     </div>



    <div class="row">
     <div class="column">
    <div class="icon">
    <p align="center">
    <b>Foreign traveler</b><br><br>
    Foreign tourists, also known as international travelers, are individuals who venture beyond their home country to explore new destinations. Hailing from diverse cultural backgrounds, they bring a wealth of languages, traditions, and perspectives. Foreign tourists seek immersive experiences, aiming to absorb the local culture, history, and traditions of the places they visit.
    </p>
    </div>
     </div>
    </div>
    <br>
    <div class="footer">
   <p>&copy;2023 We Tours | All Rights Reserved</p>
</div>

</body>
</html>