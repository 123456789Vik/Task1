<?php

//predefined variables

//server
//request
//get
//sessions
//cookies

//post
if (isset($_POST['submit'])){
   $username= $_POST['username'];
   $email=  $_POST['email'];

   echo "my username is : $username";
   echo "<br>";
   echo "my email is: $email";
}

?>
<html>
<head> </head>
<body>
    <form method="post" action="super_globals.php">
      username: <input type="text" name="username">
        <br>
        email:  <input type="text" name="email">
        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
