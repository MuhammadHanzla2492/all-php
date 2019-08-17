<!DOCTYPE html>
<?php
    session_start();

    $Username ="user";
    $Pasword ="Pasword";

    if (isset( $_SESSION['loggedin'])&& $_SESSION['loggedin']== true) {
    	header("location: success.php");
    }
    if (isset( $_POST['Username']) && isset( $_POST['Pasword'])) {
    	 if ($_POST['Username']== $Username && $_POST['Pasword'] == $Pasword) 
    {
    	$_SESSION['loggedin'] = true;
    	header("location:success.php");
    	 }
    }

?>
<html>
<body>
    <form method="post" action="index.php">
    	Username:<br/>
    	<input type="text" name="Username"><br/>
    	Pasword:<br/>
    	<input type="Pasword" name="Pasword"><br/>
    	<input type="submit" value="login!">
</body>
</html>