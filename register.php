

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/register.css">
</head>
<body>
      <div class="main">
   <form action="PHP_Actions/register.php" method="POST" >
      <h3>Create New Account</h3>
      <input type="text" name="name" required placeholder="User Name" class="name">
      <input type="password" name="password" required placeholder="Password" class="password">
      <input type="password" name="cpassword" required placeholder="Confirm Password" class="password">
      <input type="submit" name="submit" class="btn" value="Create account">
      <p class="login ">Do you already Have Account? <a href="login.php"> Login</a></p>
   </form>
         </div>
</body>
</html>