<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>

    <form action="join_process.php" method="POST">
        <p><input type="text" placeholder="ID" name="id"></p>
        <p><input type="password" placeholder="PW" name="pw"></p>
        <p><input type="text" placeholder="Nickname" name="nickname"></p>
        <p><input type="radio" name="sex" value="man">남자<input type="radio" name="sex" value="woman">여자</p>
        <input type="submit" value="회원가입">
    </form>
    
</body>
</html>