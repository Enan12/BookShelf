<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 4/25/16
 * Time: 1:32 AM
 */


require_once "dbconnect.php";

if(isset($_POST['text']) && isset($_POST['mail'])) {
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die(false);
    }

	$text = test_input($_POST['text']);
    $mail = test_input($_POST['mail']);

    $sql = "INSERT INTO $dbname.feedback (email, text, OrderDate) VALUES (?,?,NOW());";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $mail, $text);
    $stmt->execute();
    if ($stmt->errno) {
        echo("Database error: " . $conn->connect_error);
        die(false);
    }
    die(true);
}
else if(isset($_POST['load'])) {
    $num = (int)test_input($_POST['load']);

    $sql = "SELECT * FROM $dbname.feedback NATURAL JOIN $dbname.user_table ORDER BY OrderDate DESC LIMIT $num";
    $res = $conn->query($sql);
    if (!$res) {
        echo("Database error: " . $conn->connect_error);
        $conn->close();
        die(false);
    }
    if ($res->num_rows > 0) {
        $sender="";
        while($row = $res->fetch_assoc()) {
            $user = $row['name'];
            $txt = $row['text'];
            $sender.=
                "<div class=\"row entry\">
                    <h4 style='font-family: Arial; font-size: large; color: darkblue;'>$user :</h4>
                    <h4>$txt</h4>
                    <hr>
                </div><br>";
        }
        echo $sender;
    }
    else {
        echo false;
    }
    $conn->close();
}
die(false);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>