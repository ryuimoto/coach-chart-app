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
                <div class="content"><a href="{{ route('user_detail',['user' => $user]) }}">{{ $user->first_name }}{{ $user->last_name }}</a></div>
                <div class="content"><a href="{{ route('user_detail',['user' => $user]) }}">{{ $user->age }}</a></div>
                <form action="{{ route('user_delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user" value="{{ $user }}">
                    <input type="submit" class="delete-btn" value="削除" onclick='return confirm("本当に削除しますか？")'>
                </form>
            </li>
        @empty
        @endforelse
    </ul>
    <button type="button" onclick="location.href='{{ route('user_create') }}' ">ユーザーの追加</button>
</body>
</html>
