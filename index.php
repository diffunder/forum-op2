<?php
    date_default_timezone_set('Europe/Moscow');
    include "connection.php";
    include "functions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forum page</title>
        <style>
        button {
            width: 100px;
            height: 30px;
            background-color: #282828;
            border: none;
            color: #fff;
            font-family: arial;
            font-weight: 400;
        }
        .box {
            width: 850px;
            padding: center;
            margin-bottom: 4px;
            background-color: #fff;
            border-radius: 4px;
        }
        </style>
    </head>

    <body>

    <?php
    echo "<form method='POST' action='".setComment()."'>
    <input type ='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <a>Title:</a><div>
    <textarea name='message_title'></textarea>
    <div>
    <a>Your message:</a><div>
    <textarea name='message_text'></textarea>
    <div>
    <button type='submit' name='commentSubmit'>Comment</button>
    </form>";
    getComment();
    ?>

    
    </body>
</html>