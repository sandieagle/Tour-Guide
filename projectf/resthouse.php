<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="style3.css">

	<title>"WEE",Tour Planning</title>
	<link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
				<div class="navbar">
				  <img src="pngwing.com (10).png" alt="Logo">Explore Beyond Borders with Us....
          <a href="Vehicle.php">Back</a>
          <a href="additional.php">Next</a>
				  <a href="home.php" class="active">Home</a>
				  </div>
				</li>
            </ul>
        </nav>
</header>

<div class="row">
  <div class="column">
    <table class="scrolldown" align="left" style="background-color: rgba(0,0,0,0.5)">
  <thead>
      <tr>
		<th>No</th>
        <th>Location</th>
        <th>Contact Number</th>
        <th>Address</th>
      </tr>
  </thead>
  <tbody>
      <tr>
		<td>1</td>
		<td>Kandy</td>
        <td>Tel : 032 2260705</td>
        <td>Gerard Holiday Home, Kandy</td>
      </tr>
      <tr>
		<td>2</td>
        <td>Kandy</td>
        <td>Tel : 032 2255995</td>
        <td>Peradeniya Rest House, Kandy</td>
      </tr>
      <tr>
		<td>3</td>
        <td>Kandy</td>
        <td>Tel : 025 2264791</td>
        <td>Cafe Aroma Inn, City Centre, Kandy</td>
      </tr>
      <tr>
		<td>4</td>
        <td>Kandy</td>
        <td>Tel : 045 2246299</td>
        <td>Queens mount, City Centre, Kandy</td>
      </tr>
      <tr>
		<td>5</td>
        <td>Trincomalee</td>
        <td>Tel : 032 2255995</td>
        <td>Pleasant Park Holiday Inn, Trincomalee</td>
      </tr>
      <tr>
		<td>6</td>
        <td>Trincomalee</td>
        <td>Tel : 055 2276815</td>
        <td>Nongu Home, Trincomalee</td>
      </tr>
      <tr>
		<td>7</td>
        <td>Trincomalee </td>
        <td>Tel : 041 2273600</td>
        <td>Nature Beach Huts, Trincomalee</td>
      </tr>
      <tr>
		<td>8</td>
        <td>Nuwara Eliya</td>
        <td>Tel : 091 2224464</td>
        <td>The Queensburry Hotel, City Centre, Nuwara Eliya</td>
      </tr>
	  <tr>
		<td>9</td>
        <td>Nuwara Eliya</td>
        <td>Tel : 034 2284099</td>
        <td>Single Tree Hotel, Nuwara Eliya</td>
      </tr>
      <tr>
		<td>10</td>
        <td>Nuwara Eliya</td>
        <td>Tel : 066 2246199</td>
        <td>Huddle, City Centre, Nuwara Eliya</td>
      </tr>
      <tr>
		<td>11</td>
        <td>Nuwara Eliya</td>
        <td>Tel : 011 2858402</td>
        <td>Galway Heights Hotel, Lake Gregory, Nuwara Eliya</td>
      </tr>
      <tr>
		<td>12</td>
        <td>Galle</td>
        <td>Tel : 081 2369857</td>
        <td>Arches Fort, Galle</td>
      </tr>
      <tr>
		<td>13</td>
        <td>Galle</td>
        <td>Tel : 055 2263906</td>
        <td>Deltora Villa, Galle</td>
      </tr>
      <tr>
		<td>14</td>
        <td>Galle</td>
        <td>Tel : 037 2291759</td>
        <td>Sirene Galle Fort, Galle</td>
      </tr>
      <tr>
		<td>15</td>
        <td>Anuradhapura</td>
        <td>Tel : 037 2249299</td>
        <td>Hummingbird Leisure Villa, Anuradhapura </td>
      </tr>
      <tr>
		<td>16</td>
        <td>Anuradhapura</td>
        <td>Tel : 037 2244679</td>
        <td>Kutumbaya, Anuradhapura </td>
      </tr>
    </tbody> 
    </table>
  </div>
  <div class="column"> 
  <form id="accessForm">
    <table align="right">
      <tr>
        <th>“Do you want a rest house?”</th>
      </tr>
	  <tr>
		<td>
			<div class="radio-container">
	
				<input type="radio" name="access" id="yes" value="yes">
				<label for="yes">Yes</label><br>
				<input type="radio" name="access" id="no" value="no">
				<label for="no">No</label><br>
				<input type="submit" value="Submit">
				
			</div>		
		</td>
      </tr>
    </table>
  </form>
  </div>			  
</div>
  
  <script>
        document.addEventListener('DOMContentLoaded', function () {
    const accessForm = document.getElementById('accessForm');

    accessForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        const accessRadio = document.querySelector('input[name="access"]:checked');

        if (accessRadio && accessRadio.value === 'yes') {
            // Redirect to another web page when "Yes" is selected
            window.location.href = 'resthousebook.php'; // Replace with the URL you want to redirect to
        }else {
            // Redirect to another web page when "Yes" is selected
            window.location.href = 'additional.php'; // Replace with the URL you want to redirect to
        }
    });
});
   </script>

<div class="footer">
   <p>&copy;2023 We Tours | All Rights Reserved</p>
</div>
   
</body>
</html>