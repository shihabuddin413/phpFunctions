<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Googles Ultimate Apps - Bob's Auto parts shop</title>
	<style type="text/css">
		.highlight{
			background: grey;
			color:  white;
		}
		table, tr, td {
			border: 1px dotted grey;
		}
		
	</style>
</head>
	<body>
		<a href="app.php">Home</a>
   		<h1>Bob's Automobile shop Billing Web App</h1>
		<form action="bob.php" method="POST">
	        <table>
	            <tr>
	              <th class='highlight'>Item</th> 
	              <th class='highlight'>Unit Price</th> 
	              <th class='highlight'>Quantity</th>
	            </tr>
	            <tr>
	              <td> Oil </td> 
	              <td> BDT:82 </td>
	              <td> <input type="number" value="0" name="item1" /> </td>
	            </tr>
	            <tr>
	              <td> Wheel </td> 
	              <td> BDT:400 </td>
	              <td> <input type="number" value="0" name="item2" /> </td>
	            </tr>
	            <tr>
	              <td> Spark Plugs </td> 
	              <td> BDT:100 </td>
	              <td> <input type="number" value="0" name="item3" /> </td>
	            </tr>
	            <tr>
	              <td><input type="submit" value="Calculate Total"></td>
	            </tr>
	        </table>
	    </form>
	    <br><br>

		<?php

		  if (isset($_POST['item1']) and isset($_POST['item2']) and isset($_POST['item3'])){ 
			
			$item1_qty = $_POST['item1'];
			$item2_qty = $_POST['item2'];
			$item3_qty = $_POST['item3'];



			define ("ITEM1_UPRICE", 82);
			define ("ITEM2_UPRICE", 400);
			define ("ITEM3_UPRICE", 100);

			$vatPercentage = 5;

			$subTotal = ($item1_qty * ITEM1_UPRICE)+
						($item2_qty * ITEM2_UPRICE)+
						($item3_qty * ITEM3_UPRICE);

			$vatAmount =(($vatPercentage/100)*$subTotal);

			$total = $subTotal + $vatAmount;

		 	echo (" 
		 	<table >
		 		<tr class='highlight'>
		 			<td colspan='2'>You'll charge a $vatPercentage % extra of the subtotal as VAT</td>
		 		</tr>
		 		<tr>
		 			<td>Subtotal (without VAT) </td>
		 			<td class='highlight'>$subTotal</td>
		 		</tr>
		 		<tr>
		 			<td>Total VAT ($vatPercentage of Subtotal):</td>
		 			<td class='highlight'>$vatAmount</td>
		 		</tr>
		 		<tr>
		 			<td>Total (including vat and others):</td>
		 			<td class='highlight'>$total</td>
		 		</tr>
		 	</table> ");
		 }
		?>
		<h3>Thank you for the business. Hope to see you soon.</h3>
	</body>
</html>