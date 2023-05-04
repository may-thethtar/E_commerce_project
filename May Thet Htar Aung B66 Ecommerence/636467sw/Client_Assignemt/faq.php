<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>FAQ Template | CodyHouse</title>
  <style>
  h3{
  text-align:center;
  font-family: "Lucida Console", "Courier New", monospace;
  }
  section{
  background:black;
  }
  </style>
</head>
<body>
<?php

include 'connection.php';
include 'header.php';
?>
<br>
<h3> How Can I Help You?</h3>
<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
		<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Basics</a></li>
		<li><a class="cd-faq__category truncate" href="#payments">Payments</a></li>
		
		<li><a class="cd-faq__category truncate" href="#delivery">Delivery</a></li>
	</ul> <!-- cd-faq__categories -->

	<div class="cd-faq__items">
		<ul id="basics" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Basics</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span> How do I place my order?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Choose products you want to order from the categories. We offer a great assortment from fresh food, and groceries to electronics, books and many more.
Choose the item that you wish to purchase and add it to your Cart by clicking the "Add To Cart" button. The quantity/number of units of the product can be increased or decreased by clicking on the "+" or "-" button. When shopping has been finished, we suggest you check the items in your shopping cart by clicking on the Cart icon, which is located at the top right corner of your screen. You can edit, remove and then, "Proceed To Checkout" if you are satisfied.
For Shipping Address, select an existing address you have previously added or create a new address as required and click "Next" to proceed.
Choose the billing address and click the "Next" button again.
Choose your preferred delivery date and time slot and click "Next".</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span> How can I contact  All4U company? </span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>You can contact our Customer Care in the following ways:
Email us at: customercare@all4u.com.mm</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>Can I place an order over the phone?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>No, we don’t accept orders on the phone. Orders can only be placed via our website. However, if you are facing any difficulties placing an order, feel free to contact our customer care and they will assist you with the order placement process

</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->
		
		<ul id="payments" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Payments</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>What are the modes of payment?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Currently, we use the following modes of Payment:</p><br><p>
*Cash on Delivery
</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>What If I want to return something?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Case 1: No questions asked return at the time of delivery. You can easily return products at the time of delivery to our delivery staff and don’t have to pay for it.
Case 2: If there is any major issue with the products, call us within 7 days of delivery. You will be asked to share photos of the product that you wish to return. Our very considerate Customer Care Department will decide on the future course of action. Please note that the Company reserves full rights not to accept any returns in this case.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

		
		<ul id="delivery" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Delivery</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>What If I want to return something?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Case 1: No questions asked return at the time of delivery. You can easily return products at the time of delivery to our delivery staff and don’t have to pay for it.
Case 2: If there is any major issue with the products, call us within 7 days of delivery. You will be asked to share photos of the product that you wish to return. Our very considerate Customer Care Department will decide on the future course of action. Please note that the Company reserves full rights not to accept any returns in this case.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>What to do if an item delivered to me is defective (broken, leaking, and/or expired)?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>We at All4U take utmost care to deliver only the best quality of products to you. In the rare case, you find a defect – breakage, leakage, expired product in an order, you can immediately return the same to our delivery staff, at the time of delivery.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>How much do you charge for delivery?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Standard Delivery
For orders below 20,000 MMK, we charge a flat fee of 2,000 MMK for all the townships listed on our website.
Free delivery for orders with 20,000 MMK & above</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			
		</ul> <!-- cd-faq__group -->
	</div> <!-- cd-faq__items -->

	<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="assets/js/main.js"></script> 
<?php include 'footer.php';?>
</body>
</html>