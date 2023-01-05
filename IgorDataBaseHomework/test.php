<?php

$connection = new mysqli("localhost", "root", "", "store");

if ($connection->errno == 0) {
    $age = $_POST["age"];
    $name = $_POST["name"];
    $request = "INSERT INTO client (name,age) VALUES('$name', '$age');";
    if($result = $connection->query($request))
    {
        echo "Successful Added";
    }
    else{
        echo "Not Successful";
    }
} else {
    echo "Connection can't be established";
}
