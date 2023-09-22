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

    $dsn='mysql:dbname=shop;host=127.0.0.1;port=3308;charset=utf8';
    $passwd='root';
    $user='root';

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

スタッフ修正<br/>
<br/>
スタッフコード<br/>
<?php print $staff_code;?>
<br/>
<br/>
<form method="post" action=staff_edit_check.php>
<input type="hidden" name="code" value="<?php print $staff_code;?>">
<div>スタッフ名</div>
<input type="text" name="name" style="width:200px" value="<?php print $staff_name;?>"><br/>
<div>パスワードを入力して下さい。</div>
<input type="password" name="pass" style="width:100px"><br/>
<div>パスワードをもう一度入力して下さい</div>
<input type="password" name="pass2" style="width:100px"><br/>
<br/>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>
</body>
</html>