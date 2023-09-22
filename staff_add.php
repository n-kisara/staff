<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
    <div>スタッフ追加</div>
    <form method="post" action="staff_add_check.php"><br/>
        <label for="">スタッフ名を入力して下さい</label><br/>
        <input type="text" name="name" style="width:200px"><br/>
        <label for="">パスワードを入力して下さい</label><br/>
        <input type="password" name="pass" style="width:100px"><br/>
        <label for="">パスワードをもう一度入力して下さい</label><br/>
        <input type="password" name="pass2" style="width:100px"><br/>
        <input type="button" onclick="history.back()" value="戻る"><br/>
        <input type="submit" value="OK"><br/>
    </form>
</body>
</html>