<?php
session_start();

if (isset($_POST["add_to_cart"])) {
	
	$product_id = $_POST["product_id"];
	
	$product_quantity = $_POST["product_quantity"];

	if (!isset($_SESSION["cart"])) {
		$_SESSION["cart"] = [];
		header("location:cart.php");
	}

	$_SESSION["cart"][$product_id] = $product_quantity;
	header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Smart Tech Shopping Web Application</title>
		<link rel="stylesheet"
				href="shop.css">
	</head>
	<body>
		<header>
		<h1>Welcome <?php
            $user = $_SESSION["user"];
            echo $user["name"];
			
			?> to Smart Tech Shopping Web Application</h1>
		</header>
<nav>
	<ul>
				<li><a href="shop.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</nav>
<main>
<section>
				<h2>Products</h2>
<ul>
	<li>
		<h3>NOTHING PHONE(1)</h3>
		<img src="img/phone1.webp">
            <p>Awesome Black</p>
			<p>8/256GB </p>
			<p><span>RS.29,000</span></p>

		<form method="post" action="shop.php">
		 <input type="hidden" name="product_id" value="1">
		 <label for="product1_quantity"> Quantity: </label>
							
		 <input type="number" id="product1_quantity" name="product_quantity" value="" min="0"max="10">
		 <button type="submit" name="add_to_cart"> Add to Cart</button>
		</form>
	</li>
	<li>
		<h3>NOTHING PHONE(2)</h3>
		<img src= "img/phone2.1.webp">
			<p>16/512GB</p>
            <p>Smart White</p>
			<p></p><span>RS.35,000</span></p>

	   <form method="post" action="shop.php">
			<input type="hidden"
				name="product_id"
				value="2">
				<label for="product2_quantity">Quantity:</label>
				<input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
				<button type="submit" name="add_to_cart">Add to Cart </button>
						</form>
	</li>
	<li>
		<h3>NOTHING EAR STICK(1)</h3>
		<img src= "img/nothingear1.webp">
		<p>ANC Earphone</p>
		<p> <span>RS.5000</span> </p>

		<form method="post" action="shop.php">
		 <input type="hidden" name="product_id" value="3">
         <label for="product3_quantity"> Quantity: </label>
		 <input type="number" id="product3_quantity" name="product_quantity" value="" min="0" max="10">
		 <button type="submit" name="add_to_cart"> Add to Cart </button>
		</form>
	</li>
    <li>
	    <h3>NOTHING EAR STICK(2)</h3>
		<img src= "img/nothingear2.webp">
		<p>ANC TWS Earphone</p>
		<p><span>RS.10,000</span> </p>

		<form method="post" action="shop.php">
	     <input type="hidden" name="product_id" value="4">
		 <label for="product3_quantity"> Quantity: </label>
		 <input type="number"id="product4_quantity" name="product_quantity"value=""min="0" max="10">
		 <button type="submit" name="add_to_cart"> Add to Cart </button>
		</form>
	</li>		
					
</ul>
</section>
</main>
		
		<script src="shop.php"></script>
	</body>
</html>
