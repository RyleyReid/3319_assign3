<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
<head>
	<meta charset="utf-8">
	<script src="index.js"></script>
	<title> Assign 3</title>
</head>
<body>
	<center>
		<img src="https://wsimain-wallstreetinsani.netdna-ssl.com/wp-content/uploads/25-Homer-Simpson-Quotes-You-Should-Never-Follow-If-You-Want-To-Succeed-In-Business.png" ALIGN = bottom" id="homerMoney">
	</center>

	<?php
		include 'connectdb.php';
	?>

	<h1> Assignment 3 Website Database</h1>

	<h2 class="head">Customers</h2>
	<div class="inter">
		<form action="workOnCustomer.php" method="post">
		<div class="right">
			<?php
				include 'getdata.php';
			?>
			<input type="submit" value="Get Purchase History" name="H">
		</div>
		</form>
		
		<form action="Phone.php" method="post">
		<div class="right">
			<input type="text" name="Phone_ID" pattern="[0-9]{1,2}">CID 
			<br>
			<input type="text" name="Phone_phone" pattern="[0-9]{3}-[0-9]{4}" value="000-0000"> phone#
			<br>
			<input type="submit" value="Update Phone" name="P">		
		</div>
		</form>

		<form action="DELETE.php" method="post">
		<div class="right">	
			<input type="text" name="Delete_ID" pattern="[0-9]{2}">CID 
			<br>
			<input type="submit" value="DELETE" name="D">
		</div>	
		</form>

		<form action="Insert.php" method="post">
		<div class="left">
			<input type="text" name="ID" pattern="[0-9]{2}">CID 
			<br>
			<input type="text" name="first" pattern="[A-Za-z]{2,15}">firtname
			<br>
			<input type="text" name="last" pattern="[A-Za-z]{2,15}">lastname
			<br>
			<input type="text" name="city" pattern="[A-Za-z]{2,20}">city
                        <br>
			<input type="text" name="phone" pattern="[0-9]{3}-[0-9]{4}" value="000-0000">phone# 
			<br>
			<input type="text" name="agent" pattern="[0-9]{2}">agentID 
			<br>
			<input type="submit" value="INSERT" name="I">
			<br>
		</div>
		</form>
		<br><br>
	</div>
	<h3 class="head"> Products</h3>
	<div class="inter">		
		<button id="showProducts" class="button">show Products </button>
		<br>
		<p1 id="products" class="hide">
			<form action="profit.php" method="post">
			All Products
			<?php
				include 'products.php'
			?>
			<input type="submit" value="Get Product profits">
			</form>
			<br><button id="hideProducts" class="button">hide</button><br>
		</p1>

		
		<br><button id="showUnwanted" class="button">Products that have not been Purchased</button>					

		<div id="unwanted" class="hide">
			<?php
				include 'unwanted.php'
			?>
			<button id="hideUnwanted" class="button">hide</button>
		</div><br>

		<p3>
			<br>find products that have sold over a certain quantity:
			<form action="oversold.php" method="post">
			<input type="text" name="input" pattern="[0-9]{2}">
			</form> 
			
		</p3>		
	
		<p4>
			<br><br>
			List products alpabetically or by price, ascending or desending:
			<form action="ListBy.php" method ="post">
			<?php
				include 'listButtons.php'
			?>			
			<input type="submit" valu="Produce List">
			</form>
		</p4>
	</div>
	
	<h4 class="head"> Purhcases </h4>
	
		<button id="showPur" class="button">Show Purchases </button>
		
		<div class="inter">
			<div id="pur" class="hide">
				<?php
					include 'ShowPurchases.php'
				?>
				<br><button id="hidePur" class="button">hide</button><br>
			</div>

			 <?php
		                include 'connectdb.php';
        		?>


			<div>
				<form action="addPur.php" method="post">
                        		<?php
                                		include 'getPur.php';
                        		?>
        		                <input type="text" name="amount" >
					<input type="submit" value="Submit Purchase"  pattern="[0-9]{1,3}">
				</form>
	
			</div>

		</div>
		
		<?php
		mysqli_close($connection);
		?>
</body>
</html>
