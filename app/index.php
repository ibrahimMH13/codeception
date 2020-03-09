<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo "Our App"?></title>
</head>

<body>
<h1>Home Page</h1>
<form id="login" method="post" action="admin.php">
    <label for="name">Name</label>
    <input name="name" id="name" type="text"/>
    <label for="password">Password</label>
    <input name="password" id="password" type="password"/>
    <label for="submit">Save</label>
    <button id="submit" type="submit">save</button>
</form>
</body>
</html>
