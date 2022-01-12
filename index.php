<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ultimate App Store</title>
  <style type="text/css">
       form {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
       }
       input[type="text"]{
        margin: 8px;
       }
       h2{
        width: 100%;
        text-align: center;
       }
  </style>
</head>
<body>
   <h1>Welcome, to ultimate web app store!</h1>
   <hr/>
   <h2>Log In Now, </h1>
   <form action="login.php" method="POST">
     <input type="text" name="name" placeholder="Username">
     <input type="password" name="password" placeholder="password"><br/>
     <input type="submit" />
   </form>
   <hr/>
   <h5>N.B: A guest account is available with Username "guest" & password "1234" is as follow.Otherwise, you can always login using a Admin account. 
   </h5>
</body>
</html>