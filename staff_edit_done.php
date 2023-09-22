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
    $dsn='mysql:dbname=shop;host=127.0.0.1;port=3308;charset=utf8';
    $usr='root';
    $passwd='root';
  
    $dbh=new PDO($dsn,$usr,$passwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $staff_code=$_POST['code'];
    $staff_name=$_POST['name'];
    $staff_pass=$_POST['pass'];

    $staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    $sql = 'UPDATE  mst_staff SET name = ?,password = ? WHERE code = ?';
    $stmt=$dbh->prepare($sql);
    $data[]=$staff_name;
    $data[]=$staff_pass;
    $data[]=$staff_code;
    $stmt->execute($data);

    $dbh=null;
    
} 
catch(Exception $e)
{
    echo "接続失敗:".$e->getMessage();
    exit();
}
?>
修正しました。<br />
<br/>

<a href="staff_list.php">戻る</a>
</body>
</html>
<!-- 
foreach($sr as $row) {
    echo '<tr>';
    echo '<td>',' htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
} -->