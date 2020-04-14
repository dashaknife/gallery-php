<?php
$counter = isset($_COOKIE['counter'])?$_COOKIE['counter']:0;
$counter++;
setcookie("counter", $counter, strtotime("+1 days"));
echo $counter;
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
if(isset($_REQUEST['submit'])){
    $_SESSION['Name']=$_REQUEST['Name'];
    $_SESSION['Surname']=$_REQUEST['Surname'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylepost.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/jpg">
    <title>BUY TICKET</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <p>
    <input  type="text" name="Name" placeholder="Name">
        <p>
    <input  type="text" name="Surname" placeholder="Surname">
        <p>
    <input type="email" name="Email" placeholder="Email">
    <p>
        <input type="number" name="card" placeholder="Card">
    <p>
        <input class="btn  btn--big btn--ftr btn--block1" type="submit" name="submit" placeholder="BUY TICKET">
</form>
</body>
</html>


