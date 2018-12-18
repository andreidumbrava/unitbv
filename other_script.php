<!doctype html>
<html lang=" en">
<head>
    <meta charset="utf-8">
    <title>No_Session_PHP_Test</title>
</head>
<body>
<?php
    session_start();
    if (session_status() != PHP_SESSION_ACTIVE){
        echo "<h1>No session started yet</h1>";
    } else {
        echo "<h1>A session was detected with status ";
        echo session_status();
        echo " and id ".session_id();
        echo "</h1>";
    }
?>
</body>
</html>
