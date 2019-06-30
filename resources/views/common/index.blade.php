<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$name}}的简历</title>
</head>
<body>
    <h1>{{$name}}的简历</h1>
    <h2>Contact</h2>
    @foreach ($contact as $ck=>$cv)
        <p>{{$ck}}: {!!$cv!!}</p>
    @endforeach
    <h2>Application</h2>
    <p>{{$application}}</p>
    <h2>Description</h2>
    <p>{{$description}}</p>
    <h2>Info</h2>
    @foreach ($info as $ik=>$iv)
        <p>{{$ik}}: {!!$iv!!}</p>
    @endforeach
    <h2>Education</h2>
    <h2>Experience</h2>
    <h2>Skill</h2>
</body>
</html>