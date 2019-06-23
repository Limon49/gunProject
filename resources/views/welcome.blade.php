<!DOCTYPE html>
<html>
<title>Arma THe DAtabase</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  background: url(https://https://www.flickr.com/photos/90068985@N04/8952447929);
  background-size: cover;
  background-color: white;
  
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>


<div class="navbar" class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Gun</b>Overall</a>

  
  
  <div class="dropdown">
    <button class="dropbtn"><b><i>Customer</i>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/customer">Add Customer</a>
      <a href="http://127.0.0.1:8000/showcustomer">Show Customer</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn"><b>Gun
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/gun">Add Gun</a>
      <a href="http://127.0.0.1:8000/showgun">Show Gun</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Cart Item
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/cart_item">Add Cart Item</a>
      <a href="http://127.0.0.1:8000/showcart_item">Show  Cart Item</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Payment
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/payment">Add Payment</a>
      <a href="http://127.0.0.1:8000/showpayment">ShoW Payment</a>
      
   </div>
  </div> 
  <!-- <div class="dropdown">
    <button class="dropbtn"><b>Raw Materials</p>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/addmaterial">Add Material</a>
      <a href="http://127.0.0.1:8000/showmaterial">Show Material</a>
      
    </div>
  </div> -->
    <div class="dropdown">
    <button class="dropbtn"><b>Query
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://127.0.0.1:8000/agg">Aggregate</a>
      <a href="http://127.0.0.1:8000/join1">Join</a>
       <a href="http://127.0.0.1:8000/subQuery">SubQuery</a>
        <a href="http://127.0.0.1:8000/uni">Set Operation</a>
         <a href="http://127.0.0.1:8000/showcustomer">Function</a> 
      
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://images5.alphacoders.com/384/thumb-1920-384308.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-green w3-opacity-min"><b>Arma The Fogo </b></span> <span class="w3-hide-small w3-text-light-grey">Gun </span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">



</body>
</html>
Type a message...
