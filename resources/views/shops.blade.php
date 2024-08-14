<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>店舗一覧</title>
</head>
<body>
<h1>店舗一覧</h1>
<ol>
    @foreach($shops as $shop)
        <li>{{$shop->name}}</li>
    @endforeach
</ol>
</body>
</html>
