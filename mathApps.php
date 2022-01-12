<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MathApps</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: space-around;
			align-items: flex-start;
		}
		.fibnacci{
			display: flex;
			flex-direction: column;
		}

		span {
			border:  1px solid black;
			padding:  2px 10px;
		}
		div{
			/* border: 1px solid lightgrey; */
		}
		.highlight {
			background: grey;
			color:  white;
		}
		.numTag{
			background: lightgrey;
			color:  black;
			padding:  5px;
			margin:  3px;
		}
		table, tr, td {
			border: 1px dotted grey;
		}
	</style>
</head>
<body>
	<a href="app.php">Home</a>
	<!-- // fibonacci genarotor -->
	<div class="fibnacci">
		<h1>Fibonacci Genarator</h1>
		<form action="mathApps.php" method="POST">
			<p>
				Select Maximun Number (1-10000): <br><br>
				<input 
					id="max"
					type="range" 
					min="1" 
					max="10000" 
					name="max"
					value="1"
				>
				<span id="showMax">1</span>
			</p>
			<input type="submit" >
		</form><br/><br/>
		<?php 	
			 if (isset($_POST['max'])){
			 	$range = intval($_POST['max']);
			 	$counter=0;
			 	$crr=1;
			 	$prv=0;
			 	$res=0;
			 	echo "<table>";
			 	$isRowOpen=False;
			 	while ( $res < $range){
			 		// echo "prv:$prv/ crr:$crr/ res:$res/ counter:$counter<br/>";
			 		if ($counter % 5 == 0){
			 			if ($isRowOpen){
			 				echo "</tr>";
			 				$isRowOpen=False;
			 			}
			 			else{
			 				echo "<tr>";
			 				$isRowOpen=True;
			 			}
			 			
			 		}
			 		echo "<td class='numTag'>$res</td>";
			 		$res = $crr + $prv;
			 		$prv = $crr;
			 		$crr = $res;

			 		$counter += 1;
			 	}
			 	if ($isRowOpen){
			 		echo "</tr>";
			 	}
			 	echo "<tr><td class='numTag' colspan='5'>Total $counter numbers genarated</td></tr>";
			 	echo "</table>";
			 }
		?>
	</div>
	<!-- // pallindrome check -->
	<div>
      <h1>Is it a Palindrome?</h1>
      <p>(e.g) 5445, Mom, level</p>
      <form action="mathApps.php" method="POST">
	       <input class="inp" 
	              type="text" 
	              name="word" 
	              value="0"
	       />
	       <input 
	          type="submit" 
	          value="Check"
	       />
      </form>
      <?php
        if (isset($_POST['word'])){
          $word = $_POST['word'];
          

          function checkPalindrome ($word) {
          	$isPal = False;
	      	$length = strlen($word);
	      	$word = strtoupper($word);
            for ($x = 0; $x < $length; $x++) {
			  if ($word[$x] == $word[$length-$x-1]){
			  	$isPal = True;
			  }
			  else{
			  	$isPal = False;
			  	return False;
			  }
			}
		    return True;
	      }

          if (checkPalindrome($word)){
         	echo "<h3>$word is a Palindrome!</h3>";
          }
          else{
         	echo "<h3>$word is NOT a Palindrome!</h3>";
          }
        }

      ?>
    </div>
	<!-- // grade calculator  -->

	<div>
		<h1>Grade calculator: </h1>
		<form action="mathApps.php" method="POST">
			<table>
		        <tr>
		          <th class='highlight'>MATH</th> 
		          <td> <input type="number" placeholder="100" name="MATH" /> </td> 
		      	</tr>
		      	<tr>
		          <th class='highlight'>BANGLA</th> 
		          <td> <input type="number" placeholder="100" name="BANGLA" /> </td>
		      	</tr>
		      	<tr>
		          <th class='highlight'>ENGLISH</th>
		          <td> <input type="number" placeholder="100" name="ENGLISH" /> </td>
		        </tr>	
		        <tr>
		        	<td colspan="2">
		        		<input type="submit" value="View Result & GPA" />
		        	</td>
		        </tr>
		    </table>
	    </form> 
	    <br>
	    <br>
	    <?php 
	    	if (isset($_POST['MATH']) and 
	    		isset($_POST['BANGLA']) and 
	    		isset($_POST['ENGLISH'])){

	    		$math = intval($_POST['MATH']);
	    		$bangla = intval($_POST['BANGLA']);
	    		$english = intval($_POST['ENGLISH']);

	    		function findAvg ($math, $bangla, $english){
	    			return ($math + $bangla + $english)/3;
	    		}

	    		function findGrade($num){
	    			if ($num >= 80){
	    				return 5;
	    			}
	    			else if ($num >= 70){
	    				return 4;
	    			}
	    			else if ($num >= 50){
	    				return 3;
	    			}
	    			else if ($num >= 40){
	    				return 2;
	    			}
	    			else {
	    				return 0;
	    			}
	    		}

	    		$math_grade = findGrade($math);
	    		$bangla_grade = findGrade($bangla);
	    		$english_grade = findGrade($english);

	    		$findAvgNum = findAvg ($math, $bangla, $english);
	    		$gpa = findAvg ($math_grade, $bangla_grade, $english_grade);

	    		echo "
	    		<table>
		    		<tr>
		    		  <th>Subject</th>
			          <th class='highlight'>MATH</th> 
			          <th class='highlight'>BANGLA</th> 
			          <th class='highlight'>ENGLISH</th>
			        </tr>
			        <tr>
		    		  <th class='highlight'>Grade point</th>
			          <td> $math_grade</th> 
			          <td> $bangla_grade</th> 
			          <td> $english_grade</th>
			        </tr>
			        <tr>
			          <th colspan='4' class='highlight'>Avg. number</th>
			        </tr>
			        <tr>
			          <td colspan='4'> $findAvgNum </th> 
			        </tr>
			        <tr>
			          <th colspan='4' class='highlight'>GPA</th> 
			        </tr>
			        <tr>
			          <td colspan='4'> $gpa </th>
			        </tr>
		        </table>
		        ";

	    	}
	    ?>
	</div>


	<script type="text/javascript">
		
		let max = document.getElementById("max");
		
		let showMax = document.getElementById('showMax')

		max.addEventListener('change', (e)=>{
			console.log(e.target.value )
			showMax.innerHTML=e.target.value
		});
	</script>
 </body>
</html>