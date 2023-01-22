<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $username = $_POST['username'];
        $comment = $_POST['comment'];
        if(!empty($username) && !empty($comment)){
            echo "<p>Hi, $username your comment has been received successfully</p>";
            echo "<p>Here is the comment that you have entered: $comment</p>";
        } else {
            echo "<p>please fill in all fields in the form!</p>";
        }
    }
    else {
           echo "<p>oops something went wrong</p>";
    }

?>

<!-- command to run server: php -S localhost:8000 -->
<!-- note: the server handles the response -->