<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
<?php

try 
{
    $dsn='mysql:dbname=shop;host=localhost;port=3308;charset=utf8';
    $usr='root';
    $passwd='root';
  
    $dbh=new PDO($dsn,$usr,$passwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $staff_name=$_POST['name'];
    $staff_pass=$_POST['pass'];

    $staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    $sql = 'INSERT INTO mst_staff(name,password)VALUES(?,?)';
    $stmt=$dbh->prepare($sql);
    $data[]=$staff_name;
    $data[]=$staff_pass;
    $stmt->execute($data);

    $dbh=null;

    print $staff_name;
    print 'さんを追加しました。<br/>';
    
} 
catch(Exception $e)
{
    echo "接続失敗:".$e->getMessage();
    exit();
}
?>

<a href="staff_list.php">戻る</a>
</body>
</html>
<!-- 
foreach($sr as $row) {
    echo '<tr>';
    echo '<td>',' htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
} -->