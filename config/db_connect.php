<?php

$server = 'localhost';
$username = 'nirah';//nirah
$password = 'fcOp!UkoBHlw'; //fcOp!UkoBHlw
$db = 'nirah_noar';

// Connect to database
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (!$conn)
{
    echo 'Connection failed: ' . msqli_connect_error();
}
