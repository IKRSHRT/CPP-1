<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ユーザー一覧</title>
</head>
<body>
<h1>ユーザー一覧</h1>

<table width="100%" border="1">
    <thead>
    <tr style="background-color: lightgray">
        <td>氏名</td>
        <td>所属店舗</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
        <tr>
            <td>{{ $user->name }}</td> {{-- 各要素を表示 --}}
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</body>
</html>
