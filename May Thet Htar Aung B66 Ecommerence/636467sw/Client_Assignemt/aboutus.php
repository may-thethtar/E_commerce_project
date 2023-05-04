<?php

include 'connection.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  .about-section.h1{
  background-color:#454;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Launched in 2020, ALL4U.com is the leading platform for convenience stores in Myanmar. We serve thousands of buyers and suppliers around the city.
As part of the ALL4U Group, our mission is to make it easy to do business anywhere.

We do this by giving suppliers the tools necessary to reach all audiences for their products and helping buyers find products and suppliers quickly and efficiently.
ALL4U.com brings you hundreds of millions of products in over 10 different major categories, including consumer electronics, machinery and apparel.

</p>
  <p>Buyers for these products are located in regions and townships and exchange hundreds of thousands of messages with suppliers on the platform each day.
As a platform, we continue to develop services to help businesses do more and discover new opportunities.

Whether it’s sourcing from your mobile phone or contacting suppliers in their local language, turn to ALL4U.com for all your business needs.
.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/h7.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Name:Jane Doe</p>
        <p>jane@example.com</p>
         <p><a href="addc.php" class="button">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/h8.jpg" alt="Mike" width="100%" height="50%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Name : MikeRose</p>
        <p>mike@example.com</p>
        <p><a href="addc.php" class="button">Contact</a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/h3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Name : John Doe</p>
        <p>john@example.com</p>
        <p><a href="addc.php" class="button">Contact</a></p>
      </div>
    </div>
  </div>
</div>
<?php 
include 'footer.php';
?>

</body>
</html>
