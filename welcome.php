<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <br>
    <br>
    <br>
<br>
<br>
<h1 style="background-color:yellow;color:teal;font:Comic Sans MS; text-align:center">Wanna To See Students Who Have Registered? Click TO This Link!</h1>
<br>
<h1 style="size:50; text-align:center"><a href="index1.php">Datatbase</a></h1>
<br>
<br>
<br>

</body>
</html>