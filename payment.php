<!DOCTYPE html>
<html>
<head>
	<title>"WEE",Tour Planning</title>
  <link rel = "icon" href ="pngwing.com (10).png" type = "image/x-icon">

  <style>
/* Style for the sidebar */
.sidebar {
  width: 300px; /* Adjust the width as needed */
  height: 100vh; /* Full height of the viewport */
  background-color: black;
  position: fixed;
  top: 0;
  left: 0;
  overflow-x: hidden;
  padding-top: 0px;
}

/* Style for the image inside the sidebar */
.sidebar img {
  width: 100%; /* Make the image fill the sidebar */
  display: block;
  margin-bottom: 20px;
  height: 70%;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  padding: 0px 8px;
  color: white;
  font-family: Georgia;
}

/* Style for the main content area */
.content {
  margin-left: 250px; /* Ensure content doesn't overlap with the sidebar */
  padding: 20px; /* Add some padding for better readability */

}

td{
    padding:15px;
    text-align:left;
  }
  h2{
    color:white;
    text-align:center;
    font-family: Helvetica;
  }
  table, td{
    width:75%;  
    color:white;
    margin-left: 150px;

  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }
  .main{
    color:white;
  }
  body{
    background-color:white;
    background-repeat:no-repeat;
    background-size: 100%;
    margin-top: 50px;
    background-image: url('65894.jpg');
		background-size: cover;
  }
  
  input{
    background-color: #009900;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
  }

  </style>
  <script>
    function payMethodVal(meth){
      if(meth==""){
        alert("Please select the payment method");
        return false;
      }return true;
    }
    
    function slipUpload(script){
      if(script==""){
        alert("Please upload the payment slipt");
        return false;
      }return true;
    }
    
    function formVal(payForm){
      var meth = payMethodVal(payForm.pmethod);
      var slipt = slipUpload(payForm.script);
      if(meth && slipt){
        return true;
      }
      return false;
    }
    
  </script>
</head>
<body>

<div class="sidebar">
  <img src="desktop-wallpaper-lotustower-lotus-tower.jpg" alt="Sidebar Image">
  <ul>
    <li><p>"Your security is our priority, all transactions are safeguarded with encryption. Choose from various payment methods, and enjoy instant confirmations. Learn about our refund policy and privacy measures to ensure a seamless and protected payment experience."</p></li>
  </ul>
</div>

<div class="content">

    <h2>PAYMENT</h2>
    
 
  <table>
    <tr>
    <td>

  <form action="pay.php" method="POST" name="payForm" enctype="multipart/form-data">
  <h3 class="main">Select your payment method as per your preference</h3>
  <input type = "radio" name = "pmethod" value="full">Full payment
  <input type = "radio" name = "pmethod" value="advance">Advance payment
  <br><br>
   <input type="submit" name="submit" value="submit" onclick="formVal(payForm)">
  </td>
  </tr>
  
  <tr>
  <td>
  <h3>Bank Account details</h3><br>
  Acc No - 123456789<br>
  Bank - Bank of Ceylon<br>
  Name - P. P. Perera<br>
  Branch - Kadawatha<br>
  
  </td>

  </tr>  
  </form>
    <tr><td>
    	<form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <br><br>
    <a href="register.php"><input type="button" name="back" value="Back"></a>
  <a href="home.php"><input type="button" name="back" value="Home"></a>
    </td>
</tr>

  
  </table>

</div>



</body>
</html>