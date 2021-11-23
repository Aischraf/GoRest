<?php
$user = file_get_contents('https://gorest.co.in/public/v1/comments');
$data = json_decode($user, true);

$data = $data["data"];
?>