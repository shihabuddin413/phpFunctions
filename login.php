<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page Information</title>
  <style>
 
    h4{
      border-radius: 3px;
      padding: 5px;
    }
  
    #success{
      color: green;
      border: 1px solid green;
    }
    
    #error{
      color: red! important;
      border: 1px solid red !important;
    }
  </style>
</head>
<body>
  <?php
      $appPage = "'app.php'";
      $loginPage = "'index.php'";
      $name = $_POST['name'];
      $pass = $_POST['password'];
      if (strtoupper($name) == 'GUEST' and $pass='1234'){
        echo "<h3>Hi, we are done with authentication. Your account has been authenticated.</h3> <br>";
        echo "<h4 id='success'>Click <a href=$appPage>here</a> and get a demo of our apps!</h4>";
      }
      else{
        echo "Sorry, dear! Hope you can understand.";
        echo "<h4 id='error'>We can't proceed from here. Seems like you are not our regular customer.<br/>Pllease give another attempt to sign in <a href=$loginPage>here</a> and get a demo of our apps!</h4>";
      }
  ?>
</body>
</html>