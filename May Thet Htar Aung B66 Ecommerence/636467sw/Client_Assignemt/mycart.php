<?php
include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cart</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>My Cart</h1>
			</div>
			<!-- table -->

			<div class="col-lg-9">

				<table class="table">
					<thead class="text-center">
						
						<tr>
							<th scope="col">Serial No. </th>
							<th scope="col">Item Name </th>
							<th scope="col">Item Price </th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php
						
						if (isset($_SESSION['cart'])) {
							
						
							foreach ($_SESSION['cart'] as $key => $value) 
							{
							
								$key=$key+1;
								echo "
									<tr>
										<td>$key</td>
										<td>$value[name]</td>
										<td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
										<td>
										<form action='manage_cart.php' method='POST'>
										<input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' type='number' min='1' max='10' value='$value[Quantity]' name='quantity'>
										<input type='hidden' name='name' value='$value[name]'>
										</form>
										</td>
										<td class='itotal'></td>
										<form action='manage_cart.php' method='post'>
											
											<td><button class='btn btn-sm btn-outline-danger' name='remove'>REMOVE</button></td>
											<input type='hidden' name='name' value='$value[name]'>

										</form>
									</tr>
								";	
							}
						}
						?>


						
					</tbody>
				</table>

			</div>

			<div class="col-lg-3">
				<div class="border bg-light rounded p-4">
					<h4>Grand Total</h4>
					<h5 class="text-right" id="gtotal"></h5>
					<br>
					<?php 
						if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
							
					?>
					<form action="purchanse.php" method="POST">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="fullname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="number" name="phone_no" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address </label>
							<input type="text" name="address" class="form-control" required>
						</div>  
							<div class="form-check">
								<input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="felxRadioDefault2">
									Cash On Delivery
								</label>
							</div>
							<br>
							<button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
					</form>
					<?php }
					?>
				</div>
			</div>

		</div>
	</div>

	<script>
		var gt=0;
		var iprice=document.getElementsByClassName('iprice');
		var iquantity=document.getElementsByClassName('iquantity');
		var itotal=document.getElementsByClassName('itotal');
		var gtotal=document.getElementById('gtotal');

		function subTotal()
		{
			gt=0;
			for(i=0;i<iprice.length;i++){

				itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

				gt=gt+(iprice[i].value)*(iquantity[i].value);
			}
			gtotal.innerText=gt;
		}

		subTotal(); 
	</script>
	<br><br><br><br><br><br>
	<?php 
	include 'footer.php';
	?>
</body>

</html>