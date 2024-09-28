
<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$feedback = $_POST['feedback']

$query = "INSERT INTO `users`(`name`, `email`, `contact`,'feedback') VALUES('$name', '$email', '$contact','$feedback')";
$result = mysqli_query($conn, $query);

if($result)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Try Again !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
}
?>
