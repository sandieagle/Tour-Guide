<html>
<head>
    <title>TravelingPlaces Page</title>
</head>
<style>

header {
    
	background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 30px 0;
	font-size: 40px;
}

nav ul {
    list-style-type: none;
    padding: 0;
	text-align: right;
}

nav ul li {
    display: inline;
    margin-right: 100px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 24px 26px;
  text-decoration: none;
  font-size: 47px;
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
    background-image:url("srilanka.jpg");
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
}
.mid{
position: absolute;
top: 23%;
left: 23%;
transform: translate(-23%, -23%);
font-size:60px;
}
.lower{
position: absolute;
bottom: 8px;
left: 16px;
background-color:black;
width:100%;
height:80px;
font-size:36px;
}
button{
  display: block;
    width: 300px;
    margin: 0 auto;
    font-size:60px;
}
.img{
img-align:left;
}

.h1 {
    text-align: center;
    color: black;
}
input.smallerCheckbox {
            width: 50px;
            height: 50px;
           border-color: 500px solid black;
           display: inline-block;
        }
select {
        width: 300px;
       height:100px;
       font-size:60px;
       align:center;
      }

      select option {
        width: 300px;
        height:100px;
        font-size:60px;
        align:center;
}
</style>

<body>

<header>
      <nav>
        <ul>
          <li>
             <div class="navbar">
	     <img src="logo.jfif" id="logo" align="left" height="94px" width="170px">
		<a href="TravellingPlaces.html">Back</a>
	      </div>
	</li>
       </ul>
      </nav>
    </header>

<div class ="body">
<img src="srilanka3.jpg"height="100%"width="100%">
     <div class = "mid"><h1><b>Traveling Places</b></h1>
    <form action="TourDatabase.php" method="get" name="travellingplaces2form">

       <big><b><label for="places"align="center">Select Places</label></b></big><br>

   <p>
		<img src="anuradhapura.jfif" width="500" height="400" align="left">
		<b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Anuradhapura">Anuradhapura</b><p></p>
This is one of the top Sri Lanka tourist spots which is also claimed to be one of the world heritage sites. The place gained its importance after the arrival of the Bodhi Tree which is also called the “tree of enlightenment. The popular places to visit in Anuradhapura include Ruwanweli Maha Seya, Kuttam Pokuna (twin ponds or pools), Lovamahapaya, Abhayagiri Vihara, Samadhi Buddha Statue.</p>
	<br>
	<p>
		<img src="nuwaraeliya.jfif" width="500" height="400" align="left">
		<b><input type="checkbox"class="smallerCheckbox" name="places[]" value="NuwaraEliya">Nuwara Eliya</b><p></p>
Nuwara Eliya is most famous for its tea gardens and scenery. It is a perfect place to visit for a romantic vacation or for someone who is looking for a relaxing trip. With misty clouds, lush green sloping hills and a train that looks that it has come out of the Harry Potter films, Nuwara Eliya is a hilly paradise and another great addition to Sri Lankas tourist attractions. The popular places to visit in Nuwara Eliya include Victoria Park, Bale Bazaar, Moon Plains, Ramboda Falls and St. Clair’s Falls.</p>
	<br>
	<p>
		<img src="trinco.jfif" width="500" height="400" align="left">
		<b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Trincomalee">Trincomalee</b><p></p>
Trincomalee, among many similar Sri Lanka tourist spots, is blessed with a beautiful beach. Besides water sports, there are also many temples and beaches in Trincomalee. There's also a war cemetery which is surrounded by lush gardens, which makes it one of the best places to see in Sri Lanka.</p>
	<br>
	<p>
		<img src="galle.jpg" width="500" height="400" align="left">
		<b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Galle">Galle</b><p></p>
    Galle is an important city in Sri Lanka and is a one-stop destination wherein you can take in all sights. One of the best places to visit in Sri Lanka is the Galle Fort. The Galle Fort area has wide cobblestoned roads and a number of eateries and cafes. Try and catch the sunset while you are there. There are a number of trinket shops and galleries that you can visit.Another picturesque destination for sightseeing in Galle is the Japanese Peace Pagoda. Quite close to the Unawatuna beach, it is a white dome serenity.</p>

  <p>
    <img src="anuradhapura.jfif" width="500" height="400" align="left">
    <b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Anuradhapura">Anuradhapura</b><p></p>
This is one of the top Sri Lanka tourist spots which is also claimed to be one of the world heritage sites. The place gained its importance after the arrival of the Bodhi Tree which is also called the “tree of enlightenment. The popular places to visit in Anuradhapura include Ruwanweli Maha Seya, Kuttam Pokuna (twin ponds or pools), Lovamahapaya, Abhayagiri Vihara, Samadhi Buddha Statue.</p>
  <br>
  <p>
    <img src="nuwaraeliya.jfif" width="500" height="400" align="left">
    <b><input type="checkbox"class="smallerCheckbox" name="places[]" value="NuwaraEliya">Nuwara Eliya</b><p></p>
Nuwara Eliya is most famous for its tea gardens and scenery. It is a perfect place to visit for a romantic vacation or for someone who is looking for a relaxing trip. With misty clouds, lush green sloping hills and a train that looks that it has come out of the Harry Potter films, Nuwara Eliya is a hilly paradise and another great addition to Sri Lankas tourist attractions. The popular places to visit in Nuwara Eliya include Victoria Park, Bale Bazaar, Moon Plains, Ramboda Falls and St. Clair’s Falls.</p>
  <br>
  <p>
    <img src="trinco.jfif" width="500" height="400" align="left">
    <b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Trincomalee">Trincomalee</b><p></p>
Trincomalee, among many similar Sri Lanka tourist spots, is blessed with a beautiful beach. Besides water sports, there are also many temples and beaches in Trincomalee. There's also a war cemetery which is surrounded by lush gardens, which makes it one of the best places to see in Sri Lanka.</p>
  <br>
  <p>
    <img src="galle.jpg" width="500" height="400" align="left">
    <b><input type="checkbox"class="smallerCheckbox" name="places[]" value="Galle">Galle</b><p></p>
    Galle is an important city in Sri Lanka and is a one-stop destination wherein you can take in all sights. One of the best places to visit in Sri Lanka is the Galle Fort. The Galle Fort area has wide cobblestoned roads and a number of eateries and cafes. Try and catch the sunset while you are there. There are a number of trinket shops and galleries that you can visit.Another picturesque destination for sightseeing in Galle is the Japanese Peace Pagoda. Quite close to the Unawatuna beach, it is a white dome serenity.</p>
  </form></div></div>
	</form></div></div>

         <div class = "lower"><button type="submit" value="Submit"align="center"><b>Submit</b></button></div>
<script src="script.js"></script>
   
</body>
</html>