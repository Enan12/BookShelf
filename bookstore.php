<?php
/**
 * Created by PhpStorm.
 * User: avash
 * Date: 4/25/16
 * Time: 1:32 AM
 */
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die(false);
}

require_once "dbconnect.php";

if(isset($_POST['load']) && isset($_POST['cat'])) {
    $num = (int)test_input($_POST['load']);
    $cat = strtolower(test_input($_POST['cat']));
    $offset = $num-3;

    $sql = "SELECT distinct * FROM $dbname.book NATURAL JOIN $dbname.category WHERE cat='$cat' LIMIT $offset, $num";
    $res = $conn->query($sql);
    if (!$res) {
        echo("Database error: " . $conn->error);
        $conn->close();
        die(false);
    }
    if ($res->num_rows > 0) {
        $sender="";
        while($row = $res->fetch_assoc()) {
            $name = $row['title'];
            $id = $row['book_id'];

            $sql = "SELECT AVG(rating) as num FROM $dbname.rates WHERE book_id='$id'";
            $resp = $conn->query($sql);
            if (!$resp) {
                echo("Database error: " . $conn->error);
                $conn->close();
                die(false);
            }
            $r = $resp->fetch_assoc();

            $num = $r['num'];
            $dir = $row['dir'];
            $imgdir = $row['imgDir'];
            $author = $row['author'];

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
else if(isset($_POST['catReq']) && isset($_POST['load'])) {
    $offset = test_input($_POST['load']);
    $cat = strtolower(test_input($_POST['catReq']));

    $sql="";
    switch($cat) {
        case 'all':
            $sql = "SELECT * FROM $dbname.book LIMIT $offset;";
            break;
        case 'most recent':
            $sql = "SELECT * FROM $dbname.book ORDER BY publishDate DESC LIMIT $offset;";
            break;
        case 'top rated':
            $sql = "SELECT * FROM $dbname.book join
                    (select distinct book_id, avg(rating) as \"points\" from rates group by book_id) x using(book_id)
                    order by points desc LIMIT $offset;";
            break;
        default :
            $sql = "SELECT * FROM $dbname.book join $dbname.category using(book_id) WHERE genre = '$cat' LIMIT $offset;";
            break;
    }
    $res = $conn->query($sql);
    if(!$res) {
        echo $conn->error;
    }
    $html="";
    if($res->num_rows >0)
        while($row = $res->fetch_assoc()) {
            $book_id = $row['book_id'];
            $title = $row['title'];
            $author = $row['author'];
            $pub = $row['publisher'];

            $html.=
                "<div class=\"grid_4 feed\">
                    <a href='pdfs/$book_id.pdf' target='_blank' class='read'>
                    <img src=\"thumbpdf.php?pdf=pdfs/$book_id.pdf&size=500\"
                      alt=\"images/iimg.gif\" class=\"img_inner offset__1\"></a>
                    <p style=\"text-align: center\">$title <br>By $author<br> Publisher: $pub</p>
                </div>";
        }
    $html.="<div class=\"clear\"></div>";
    echo $html;
    $conn->close();
    die;
}
else die(false);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>