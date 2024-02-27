<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <title>Document</title>
</head>
<body>
   <h1>ユーザー詳細</h1>
   <table class="sample_03">
        <tbody>
            <tr>
                <th>名前</th>
                <td>{{ $user->first_name }}{{ $user->last_name }}</td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>{{ $user->age }}</td>
            </tr>
            <tr>
                <th>所在地</th>
                <td>{{ $user->prefectures }}</td>
            </tr>
            <tr>
                <th>仕事</th>
                <td>{{ $user->profession_id }}</td>
            </tr>
            <tr>
                <th>趣味</th>
                <td>スタイルシート</td>
            </tr>
            <tr>
                <th>性格</th>
                <td>{{ $user->personality_id }}</td>
            </tr>
            <tr>
                <th>その他</th>
                <td>{{ $user->other }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <button type="button" onclick="location.href='{{ route('users') }}' ">戻る</button>
    <button type="button" onclick="location.href='{{ route('user_edit',['user' => $user]) }}' ">編集</button>
</body>
</html>