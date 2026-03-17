<?php
include("./settings/connect_datebase.php");

$query_users = $mysqli->query("SELECT `login`, `password` FROM `users`");

while ($user = $query_users->fetch_assoc()) {
    echo $user['login'] . ' : ' . $user['password'] . "<br>";
}
?>

