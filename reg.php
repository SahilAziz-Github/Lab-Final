<?php


?>
<html>
<head>
</head>
<body>
<form action="to_file.php" method="POST">
<fieldset>
<legend>Registration</legend>
<label>ID: </label> <br/>
<input type="text" name="uid"><br/>
<label>Password: </label><br/>
<input type="password" name="pass"><br/>
<label>Confirm Password </label><br/>
<input type="password" name="confpass"><br/>
<label>Name : </label><br/>
<input type="text" name="uname"><br/>

<label>User Type : </label><br/>
<input type="radio" name="usert" value='User'/> User
<input type="radio" name="usert" value='Admin'/> Admin <br/> <br/>
<input type="submit" name="sbt" value="Submit" />

<a href="login.html"> Sign In </a>
</fieldset>
</form>
</body>
</html>
