<?php
phpinfo();

 echo '<p>Hello World</p>'; 
if (empty($_POST["name"])){
    die("Name is required");
}

    

print_r($_POST);