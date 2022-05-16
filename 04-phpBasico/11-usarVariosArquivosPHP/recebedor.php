<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    echo "O email enviado é ".$email;
}


?>