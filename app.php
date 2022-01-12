<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
      width: 100%;
    }
    
    summary{
      font-weight: bold;
    }
    
    .app {
      width: 80%;
      border: 2px solid lightgrey;
      padding : 10px;
      border-radius: 4px;
    }
    
    .inp, select{
      width: 100%;
      margin: 5px 0;
    }
    
    .calculator {
      height: max-content;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>
</head>
<body>
  
    <ol>
      
      <li>
        <div>
          <summary>Google's Best Calculator Web App</summary>
          <p>This app is awarded as the best calculator web app of the year amon millions of installed advanced Ui/Ux available calculator are not as popular as it is bcz of its ULTRA FAST SPEED ! 
            <div>
                 <h4> Demo : </h4>
                 <div class="app calculator">
                   <form action="app.php" method="POST">
                     <input class="inp" 
                            type="number" 
                            name="n1" 
                            value="0"
                     />
                     <input class="inp" 
                            type="number" 
                            name="n2" 
                            value="0"
                      />
                     <select name="opr">
                        <option value="+">+ </option>
                        <option value="-">- </option>
                        <option value="*">* </option>
                        <option value="/">/ </option>
                     </select>
                     <br/>
                     <input 
                        type="submit" 
                        value="Get Result"
                     />
                     <br/>
                     <?php
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
                         
                     ?>
                   </form>
                 </div>
            </div>
        </div>
      </li>
      <li>
         <div>
          <summary>Bob's Autoparts store</summary>
          <p>Our, this app is awarded as the best Auto parts Management web app of the year among millions of installed advanced Ui/Ux available Management software are not as popular as it is bcz of its ULTRA FAST SPEED ! 
          </p>
          <div>
              <h1> Demo App </h1>
              <form action="app.php">
                <table>
                    <tr>
                      <td>Oil :<td>
                      <td>
                        <input type="number">
                        <input type="number">
                      </td>
                    </tr>
                </table>
              </form>

          </div>
        </div>
      </li>
        

    </ol>


      
</body>
</html>