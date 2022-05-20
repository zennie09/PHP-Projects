<?php
session_start();
echo '<label id=username style=font-size:25px;>'.$_SESSION['logged_in_user_name'].'</label>';
?>

