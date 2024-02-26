<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>ユーザー一覧</h1>
    <ul>
        @forelse ($users as $user)
            <li>
                <div class="content"><a href="{{ route('user_detail',['id' => $user]) }}">{{ $user->first_name }}{{ $user->last_name }}</a></div>
                <div class="content"><a href="">{{ $user->age }}</a></div>
            </li>
        @empty
        @endforelse
    </ul>
    
</body>
</html>
