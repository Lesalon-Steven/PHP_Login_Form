<?php
phpinfo();

 echo '<p>Hello World</p>'; 
if (empty($_POST["name"])){
    die("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email required");
}

print_r($_POST);