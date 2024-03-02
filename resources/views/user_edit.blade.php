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
   <h1>ユーザー編集画面</h1>
   <table class="sample_03">
        <tbody>
            <form method="post" id="user_edit">
                @csrf
                @if ($errors->any())  
                    <ul>  
                        @foreach ($errors->all() as $error)  
                            <li>{{ $error }}</li>  
                        @endforeach  
                    </ul>  
                @endif  
                <tr>
                    <th>苗字</th>
                    <td>
                        <input type="text" value="{{ $user->first_name }}">
                    </td>
                </tr>
                <tr>
                    <th>名前</th>
                    <td>
                        <input type="text" value="{{ $user->last_name }}">
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <input type="text" value="{{ $user->age }}">
                    </td>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <td>
                        <input type="text" value="{{ $user->prefectures }}">
                    </td>
                </tr>
                <tr>
                    <th>市区村長</th>
                    <td>
                        <input type="text" value="{{ $user->municipalities }}">
                    </td>
                </tr>
                <tr>
                    <th>番地</th>
                    <td>
                        <input type="text" value="{{ $user->address }}">
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>
                        <input type="text" value="{{ $user->building_name }}">
                    </td>
                </tr>
                <tr>
                    <th>仕事</th>
                    <td>
                        <input type="text" value="{{ $user->profession_id }}">
                    </td>
                </tr>
                <tr>
                    <th>趣味</th>
                    <td>
                        <input type="text" value="{{ $user->hobby }}">
                    </td>
                </tr>
                <tr>
                    <th>性格</th>
                    <td>
                        <input type="text" value="{{ $user->personality_id }}">
                    </td>
                </tr>
                <tr>
                    <th>その他</th>
                    <td>
                        <input type="text" value="{{ $user->other }}">
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
    <br>
    <button type="button" onclick="location.href='{{ route('users') }}' ">戻る</button>
    <input type="submit" form="user_edit" value="編集">
</body>
</html>