<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 4/2/16
 * Time: 2:57 AM
 */

require_once("dbconnect.php");
session_start();

if(isset($_POST["mail"]) && isset($_POST["pwd"]))
{
    $mail = test_input($_POST["mail"]);
    $pass = test_input($_POST["pwd"]);

    $sql = "SELECT * FROM login WHERE email='$mail' and password='$pass';";
    try{
        $res = $conn->query($sql);
    }
    catch(Exception $e) {
        echo $e;
    }
    if($res->num_rows > 0){
        $_SESSION['user'] = $mail;
	header("Location:index.php");
	
    }else{
        $_SESSION["login"] = "failed";
	header("Location:login.php");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$conn->close();
?>
