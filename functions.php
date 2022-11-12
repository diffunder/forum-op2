<?php

function setComment() {
    require("connection.php");
    if(isset($_POST['commentSubmit'])) {
        $date = $_POST['date'];
        $title = $_POST['message_title'];
        $message = $_POST['message_text'];

        $query = "INSERT INTO messages (date, message_title, message_text) VALUES ('$date', '$title', '$message')";
        $result = mysqli_query($con, $query);
    }
}

function getComment() {
    require("connection.php");
    $query = "SELECT * FROM messages";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<div class='div.box'>";
        echo "Anonymous";
        echo "<div>";
        echo $row['date']."<br>";
        echo $row['message_title']."<br>";
        echo $row['message_text']."<br>";
        echo "<div>";
    }
}