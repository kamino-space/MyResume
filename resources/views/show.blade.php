<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/show.css') }}">
    <title>前端测试</title>
</head>
<body>
    <div id="app"></div>
    <script src="{{ mix('js/show.js') }}"></script>
</body>
</html>