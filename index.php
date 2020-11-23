<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>opdaracht3 brokenauth</title>
    </head>
    <body>
        
    <?php

include "db.php";

if(isset($_POST["submit"])) {
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];

    echo "Your Username is ".$mail."<br>";
    echo "Your Password is ".$pass."<br>";

}

$myConn = new DB;

$query = "SELECT * FROM user WHERE email="$mail" AND password="$pass" ";

$result = $myConn->executeSQL($query);

echo gettype($result)."<br>";

if (!empty($result)) { 
    echo "<br> Login as $mail <br>";
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>

        <form class="login-form" action="index.php" method="post">
            <input type="email" name="mail" placeholder="Email" required><br>
            <input type="password" name="pass" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Log in">
        </form>
        
    </body>
</html>