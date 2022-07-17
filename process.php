<?php

    if(isset($_POST['btn-send']))
    {
    $UserName =$_POST['UName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Msg = $_POST['Msg'];

    if(empty($UserName) || empty($Email)|| empty($Phone) || empty($Msg))
    {
        header('location:index.php?error');
    }
    else
    {
        $to = 'siyam313@gmail.com';
        if(mail($to,$Phone,$Msg,$Email))
        {
            header("location:index.php?success");
        }
    }
    }
    else{
        header("location:index.php");
    }

?>
