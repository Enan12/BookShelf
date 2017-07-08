<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 5/1/16
 * Time: 2:39 PM
 */
session_start();
$user = 'guest';
$loggedin = false;
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = true;
}
else {
    header('Location:login.php');
    die;
}

require('dbconnect.php');
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

$name = test_input($_POST["name"]);
$author = test_input($_POST["author"]);
$pub = test_input($_POST["pub"]);
$cat = test_input($_POST["cat"]);
$pubDate = test_input($_POST["pubDate"]);

$sql = "INSERT INTO $dbname.book (title, author, publisher, publishDate) VALUES (?,?,?,?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $author, $pub, $pubDate);
$stmt->execute();
$stmt->store_result();
if ($stmt->errno) {
    echo("Database error: " . $conn->connect_error);
}

$book_id = $stmt->insert_id;


$target_dir = "pdfs/";
$uploadOk = 1;
$FileType = pathinfo($_FILES["fileToUpload"]["name"]);
$FileType = $FileType["extension"];
$target_file = $target_dir.$book_id . ".pdf";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50*MB) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['uploadSuccess'] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header("Location:upload.php");
    } else {
        echo "Sorry, there was an error uploading your file. Please check if your file is too large (>50MB).";
        $uploadOk =0;
    }
}
if ($uploadOk == 0) {
    $sql = "DELETE FROM $dbname.book WHERE book_id=$book_id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->errno) {
        echo("Database error: " . $conn->connect_error);
    }
}
else {
    $sql = "INSERT INTO $dbname.category (book_id, genre) VALUES (?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ds", $book_id, $cat);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->errno) {
        echo("Database error: " . $conn->connect_error);
    }

    $sql = "INSERT INTO $dbname.uploads (book_id, email) VALUES (?,?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ds", $book_id, $_SESSION['user']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->errno) {
        echo("Database error: " . $conn->connect_error);
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