<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
<?php
if(isset($_POST['disp']) === true) {
    if(isset($_POST['staffcode']) == false) {
        header('Location:staff_ng.php');
        exit;
    }
    $staff_code=$_POST['staffcode'];
    header('Location:staff_disp.php?staffcode='.$staff_code);
    exit;
}

if(isset($_POST['add']) === true) 
{
    if(isset($_POST['staffcode'])== false) 
    {
        header('Location:staff_add.php');
        exit;
    }
}

if(isset($_POST['edit']) === true) 
{
    if(isset($_POST['staffcode'])== false) 
    {
        header('Location:staff_ng.php');
        exit;
    }
    $staff_code=$_POST['staffcode'];
    header('Location:staff_edit.php?staff_code=$staff_code');
    exit;
}
if(isset($_POST['delete']) === true)
{
    {
        header('Location:staff_delete.php');
        exit;
    }

    $staff_code=$_POST['staffcode'];
    header('Location:staff_delete.php?staff_code=$staff_code');
    exit;
}
?>
</body>
</html>