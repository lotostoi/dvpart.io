<?php header("Content-Type: text/html; charset=utf-8");

if (isset($_POST['name']) && isset($_POST['text']) && isset($_POST['theme']) && isset($_POST['email'])) {

    $headers = "Content-type: text/html; charset=utf-8";
    // имя клиента
    $name = $_POST['name'];
    // email  клиента
    $email_cl = $_POST['email'];
    // адрес владельца сайта
    //$email_owner = "lotos_toi@mail.ru";
    $email_owner = "the3dmark@yandex.ru";
    // тема сообщения
    $theme = $_POST['theme'];

    // текст письма для владельца сайта

    $msg = "<!DOCTYPE html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новое сообщение:</h2>\r\n";
    $msg .= "<p>" . $_POST['text'] . "</p>\r\n";
    $msg .= "<p><strong>Email клиента:</strong> " . $email_cl . "</p>\r\n";
    $msg .= "<p><strong>Имя клиента:</strong> " . $name . "</p>\r\n";
    $msg .= "</body></html>";

    // текст письма для посетителя сайта

    $msg_cl = "<!DOCTYPE html><body style='font-family:Arial,sans-serif;'>";
    $msg_cl .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новое сообщение:</h2>\r\n";
    $msg_cl .= "<p>" . "<strong>Ваше сообщение:  \"</strong> " . $_POST['text'] . "<strong>\" успешно доставлено, мы свяжемся с вами в ближайшее время!</strong>" . "</p>\r\n";
    $msg_cl .= "<p><strong>Адрес отправителя:</strong> " . $email_owner . "</p>\r\n";
    //$msg_cl .= "<p><strong>Имя:</strong> " . $name . "</p>\r\n";
    $msg_cl .= "</body></html>";

    if (mail($email_owner, $theme, $msg, $headers)) {
        if (mail($email_cl, $theme, $msg_cl, $headers)) {
            $reply = array('reply' => 'good');
            echo json_encode($reply);
        }
    } else {
        echo "bad";
    }

}
