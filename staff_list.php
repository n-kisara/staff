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
    $passwd='root';
    $user='root';

    $dbh=new PDO($dsn,$passwd,$user);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT code, name FROM mst_staff WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    
    $dbh=null;

    print 'スタッフ一覧<br /><br />';

    print '<form method="post" action="staff_branch.php">';
    while(true) 
    {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            
        if($rec==false) 
        {
            break;
        }
        print'<input type="radio" name="staffcode" value="'.$rec['code'].'">';
        print $rec['name'];
        print '<br />';
    }
    print'<input type="submit" name="disp" value="参照">';
    print'<input type="submit" name="add" value="追加">';
    print'<input type="submit" name="edit" value="修正">';
    print '<input type="submit" name="delete" value="削除">';
    print'</form>';
}
catch(PDOException $e)
{
    echo '接続失敗:'.$e->getMessage();
    exit();
}

?>
</body>
</html>