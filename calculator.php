<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Googles ultimate Apps - calculator</title>
  
</head>
<body>
   <div class="app calculator">
     <a href="app.php">Home</a>
     <h1>Google's Best Calculator Web App</h1>
     <form action="calculator.php" method="POST">
       <input class="inp" 
              type="number" 
              name="n1" 
              value="0"
       />
       <br/><br/>
       <input class="inp" 
              type="number" 
              name="n2" 
              value="0"
       />
       <br/><br/>
       <select name="opr">
          <option value="+" >+ </option>
          <option value="-">- </option>
          <option value="*">* </option>
          <option value="/">/ </option>
       </select>
       <br/><br/>
       <input 
          type="submit" 
          value="Get Result"
       />
       </form>
       <br/><br/>
       <?php
          if (isset($_POST['n1']) and isset($_POST['n2']) and isset($_POST['opr'])){ 
             $n1 = $_POST['n1'];
             $n2 = $_POST['n2'];
             $opr = $_POST['opr'];
             
             function calculate ($n1, $n2, $opr){
               if ($opr=="+") {
                 return $n1+$n2;
               }
               else if ($opr=="-") {
                 return $n1-$n2;
               }
               else if ($opr=="*") {
                 return $n1*$n2;
               }
               else if ($opr=="/") {
                 return $n1/$n2;
               }
               else{
                 return null;
               }
             }
           
             $res = calculate($n1, $n2, $opr);
             echo "Result is : $res";
          }         
       ?>
      
   </div>
   <div>
      <h1>EVEN OR ODD?</h1>
      <form action="calculator.php" method="POST">
       <input class="inp" 
              type="number" 
              name="num" 
              value="0"
       />
       <input 
          type="submit" 
          value="Check"
       />
      </form>
      <?php
        if (isset($_POST['num'])){
          $num = $_POST['num'];
          function findEvenOdd($num){
            if ($num % 2 == 0){
              echo "<h4>$num is EVEN </h4>";
            }
            else{
              echo "<h4>$num is ODD </h4>";
            }
          }
          findEvenOdd($num);
        }
      ?>
   </div>
</body>
</html>