<?php

if(isset($_GET["test"]))
{
    file_put_contents("test.txt", $_GET["test"]);
}
echo "Test message from PHP file.";
