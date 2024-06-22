
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"WEE",Tour Planning</title>
    <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('pexels-harsha-samaranayake-13391116.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            transition: background-image 1s ease;
            
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


	.main-heading {
            font-size: 60px;
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }
        .heading2 {
            font-size: 60px;
            color: white;
            padding-left: 350px;
        }
        .heading3 {
            font-size: 100px;
            color: yellow;
            text-align: center;
        }
        .heading4 {
            font-size: 30px;
            color: white;
            text-align: center;
        }
        .heading5 {
            text-align: center;
        }
        .yellow-text {
            font-size: 40px;
            color: yellow;
        }
        .white-text {
            font-size: 30px;
            color: white;
        }
        .headline{
            
        }
        main {
            text-align: center;
            margin-top: 20vh;
        }

        .slideshow {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            margin: 0 auto;
        }

        .slideshow img {
            max-width: 100%;
            display: none;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 65px;
        }

        .buttons button{
            margin: 5px;
            padding: 5px 20px;
            font-size: 20px;
            background-color: #555;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .buttons button:hover {
            background-color: #444;
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
  position: fixed;
  top: 0;
  width: 100%;
  text-align: left;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
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



    </style>
    
</head>
<body>
    <header>
        <nav>
        <ul>
          <li>
             <div class="navbar">
                <img src="pngwing.com (10).png" alt="Logo">WEE Tours,Explore Beyond Borders with Us.
                <a href="login.php">Login</a>
                <a href="SignUp.php" class="active">Sign Up</a>
             </div>
          </li>
       </ul>
      </nav>
    </header>

    <main>
	<div class="main-heading">
        <big>Visit Sri Lanka</big></div>
        <div class="slideshow">
            <img src="pexels-harsha-samaranayake-13391116.jpg" alt="Image 1">
            <img src="Waterfalls-Srilanka.jpg" alt="Image 2">
            <img src="1000_F_287152293_DtBahZyY6JSvUV8xemL4SLNeitaNUYnY.jpg" alt="Image 3">
    </div>
    </main>
    <div class="heading2">Welcome to</div>
    <div class="heading3"><strong>Paradise</strong></div>
    <div class="heading4">Where your</div>
    <div class="heading5">
        <p><span class="white-text">Dream </span><span class="yellow-text">Island Holidays</span><span class="white-text"> come true</span></p>
    </div>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentSlide = 0;
            const slides = document.querySelectorAll();
            
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.style.display = 'block';
                    } else {
                        slide.style.display = 'none';
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            setInterval(nextSlide, 3000); // Change slide every 3 seconds

            function navigate(page) {
                // Add code to navigate to the specified page
                console.log(`Navigating to ${page} Page`);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const backgrounds = ['pexels-harsha-samaranayake-13391116.jpg', 'Waterfalls-Srilanka.jpg', '1000_F_287152293_DtBahZyY6JSvUV8xemL4SLNeitaNUYnY.jpg'];
            let currentBackground = 0;

            function changeBackground() {
                document.body.style.backgroundImage = `url('${backgrounds[currentBackground]}')`;
                currentBackground = (currentBackground + 1) % backgrounds.length;
                setTimeout(changeBackground, 3000); // Change background every 3 seconds
            }

            changeBackground();
        });
    </script>

    <footer>
        <div class="buttons">
           <p><a href="traveler.php"><button type="button">Traveler Type</button></a>
		   <a href="TravelingPlaces.php"><button type="button">Traveling Places</button></a>
           <a href="TravelingDays.php"><button type="button">Traveling Days</button></a>
		   <a href="Vehicle.php"><button type="button">Vehicle</button></a>
		   <a href="restHouse.php"><button type="button">Rest House</button></a>
		   <a href="additional.php"><button type="button">Additional</button></a>
		   <a href="register.php"><button type="button">Register</button></a>
		   <a href="payment.php"><button type="button">Payment</button></p>
        </div>
    </footer>
</body>
</html>