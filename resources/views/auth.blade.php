<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>请输入密码</title>
</head>

<body>
    <form action="/" method="post">
        @csrf
        <input type="text" name="key"><br>
        <input type="submit">
    </form>
</body>

</html>