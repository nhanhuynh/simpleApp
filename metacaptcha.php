<?php
if(isset($_POST['metacaptcha_content']))
{
    include_once "metacaptcha/metacaptcha_lib.php"; //path to metacaptcha_lib on your server
    $message = $_POST['metacaptcha_content'];
    $message = preg_replace('/\s+/', ' ', $message);
    $response = _metacaptcha_return_initial_cookie($message);
    echo json_encode($response);
}
