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
    $staff_code=$_GET['staffcode'];

    $dsn='mysql:dbname=shop;host=localhost;port=3308;charset=utf8';
     $user='root';
     $passwd='root';
   

    $dbh=new PDO($dsn,$passwd,$user);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name FROM mst_staff WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$staff_code;
    $stmt->execute($data);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $staff_name=$rec['name'];

    $dbh=null;

}
catch(PDOException $e)
{
    echo '接続失敗:'.$e->getMessage();
    exit();
}
?>

<div>スタッフ情報参照</div>
<div>スタッフコード</div>
<?php print $staff_code;?>
<div>スタッフ名</div>
<?php print $staff_name;?>
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>
</body>
</html>