<!doctype html>
<html lang=" en">
<head>
    <meta charset="utf-8">
    <title>No_Session_PHP_Test</title>
</head>
<body>
<?php
    if (session_status() == PHP_SESSION_NONE){
        echo "<h1>No session started yet</h1>";

        session_start();

        if (session_status() != PHP_SESSION_NONE){
            echo "<br /> New Session Started: ";
            echo session_id();
            echo "<pre>";
            foreach ($_SESSION as $key =>$val) echo $key." ".$val."<br />";
            echo "</pre>";
        }

    } else {
        echo "<h1>A session was detected with status ";
        echo session_status();
        echo "</h1>";
    }
?>
</body>
</html>
