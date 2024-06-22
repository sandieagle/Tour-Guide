<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles4.css">
	
    <title>"WEE",Tour Planning</title>
	<link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
  <style>
    button[type="submit"]{
            width: 100px ;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 170px;
            cursor: pointer;
        }
  </style>
</head>
<body>

<div class="row">
  <div class="column">
    <table>
      <tr>
        <td><div class="parent">
      <img height="300px" width="300px" class="image1" src="img_6273f0e0deafc.webp" />
	  <p align="center" style="font-size:20px" class="image2" height="500px" width="500px"><b>Explore the world with confidence alongside<br>our team of seasoned guides.<br>With years of experience,<br>our expert tour guides are<br>your trusted companions on unforgettable<br>journeys.
		<br>From historical insights to local secrets,<br>they bring destinations to life,<br>ensuring a remarkable<br>and enriching adventure.<br>Choose experience. Choose excellence.<br>Choose us.</b></p>
		</div></td>
      </tr>	
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
		<td><div class="parent1">
      <img height="300px" width="300px" class="image11" src="7082136-6466675-image-a-1_1544091181817.jpg" />
	  <p align="center" style="font-size:20px" class="image21" height="500px" width="500px"><b>Elevate your visual storytelling<br>with our team of super photographers.<br>At our agency,<br>we've assembled a roster of<br>highly skilled professionals<br>who excel in capturing moments<br>that matter. From weddings to<br>corporate events,<br>
		our photographers bring<br>their expertise to every assignment,<br>delivering stunning images<br>that speak volumes.</b></p>
		</div></td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
		<tr>
		<td><div class="parent2">
      <img height="300px" width="300px" class="image12" src="bigstock-Person-Cooking-Fried-Eggs-In-N-349882912.webp" />
	  <p align="center" style="font-size:20px" class="image22" height="500px" width="500px"><b>Welcome to your home away<br>from home!<br>We offer a wide selection of kitchen items<br>for rent to both local<br>and foreign tourists.<br>Whether you're craving<br>a homemade meal or simply<br>need some convenience<br>during your stay,<br>we've got you covered.<br>
		Our inventory includes<br>cookware, utensils, and more.<br>Travel light,<br>cook right - with us!</b></p>
		</div></td>
      </tr>
    </table>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>

<header>
        <nav>
            <ul>
                <li>
				<div class="navbar">
				  <img src="pngwing.com (10).png" id="logo" align="left" height="54px" width="120px">
          <a href="resthouse.php">Back</a>
          <a href="register.php">Next</a>
				  <a href="home.php" class="active">Home</a>
				  </div>
				</li>
            </ul>
        </nav>
</header>

    <div class="container">
        <h1>Tour Additional Requirements</h1>
        <form method="POST" action="add.php">
			      <label>
                Do you want a Guide &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" name="guide" value="Yes">Yes
                <input type="radio" name="guide" value="No">No
            </label>
            <label>
                Do you want a  Photographer
                <input type="radio" name="photographer" value="Yes">Yes
                <input type="radio" name="photographer" value="No">No
            </label>
            <label>
                Do you want a Kitchen Items
                <input type="radio" name="kitchenitems" value="Yes">Yes
                <input type="radio" name="kitchenitems" value="No">No
            </label>
            <button type="submit" id="submit">Submit</button>
        </form>
    </div>
<br>
<div class="footer">
   <p>&copy;2023 We Tours | All Rights Reserved</p>
</div>

    <script>
        // JavaScript code to handle form submission
        const form = document.getElementById('tour-requirements-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const guideCheckbox = form.querySelector('input[name="guide"]');
            const photographerCheckbox = form.querySelector('input[name="photographer"]');
            const kitchenItemsCheckbox = form.querySelector('input[name="kitchenitems"]');
            
            const selectedRequirements = [];
            
            if (guideCheckbox.checked) {
                selectedRequirements.push('Guide');
            }
            if (photographerCheckbox.checked) {
                selectedRequirements.push('Photographer');
            }
            if (kitchenItemsCheckbox.checked) {
                selectedRequirements.push('Kitchen Items');
            }
            
            if (selectedRequirements.length === 0) {
                alert('Please select at least one requirement.');
            } else {
                alert('Selected Requirements: ' + selectedRequirements.join(', '));
                // You can send the selected requirements to your server or perform other actions here.
            }
        });
		
    </script>
	

</body>
</html>