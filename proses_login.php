<?php
    //ini diambil dari db
    $user = "fahmi";
    $pass = "idrus";

    if ($_POST["usr"] != $user)
    {
        echo "username salah";
    }
    else if($_POST["pwd"] != $pass)
    {
        echo "password salah";   
    }
    else
    {
        header("location: index.php");
    }
?>