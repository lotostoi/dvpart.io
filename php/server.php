<?php header("Content-Type: text/html; charset=utf-8");


if (isset($_POST['name']) && isset($_POST['text']) && isset($_POST['theme']) && isset($_POST['email'])) {
    $headers = "Content-type: text/html; charset=utf-8";
    $email = "lotos_toi@mail.ru";
    $theme = $_POST['theme'];
    $text = wordwrap($_POST['text'], 70, "\r\n");
    $email = $_POST['email'];
    if (mail($email, $theme, $text, $headers)) {
        $reply = array('reply'=> 'good');
        echo json_encode($reply);
        
    } else {
        echo "bad";
    }

}
