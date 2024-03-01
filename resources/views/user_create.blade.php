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
   <h1>ユーザー作成画面</h1>
    <form action="" method="POST" id="user_create">
        @csrf
        <table class="sample_03">
            <tbody>
                @csrf
                <tr>
                    <th>苗字</th>
                    <td>
                        <input type="text" name="first_name" value="{{ old('first_name') }}">
                    </td>
                </tr>
                <tr>
                    <th>名前</th>
                    <td>
                        <input type="text" name="last_name" value="">
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <input type="text" name="age" value="">
                    </td>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <td>
                        <input type="text" name="prefectures" value="">
                    </td>
                </tr>
                <tr>
                    <th>市区村長</th>
                    <td>
                        <input type="text" name="municipalities" value="">
                    </td>
                </tr>
                <tr>
                    <th>番地</th>
                    <td>
                        <input type="text" name="address" value="">
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>
                        <input type="text" name="profession_id" value="">
                    </td>
                </tr>
                <tr>
                    <th>仕事</th>
                    <td>
                        <input type="text" name="hobby" value="">
                    </td>
                </tr>
                <tr>
                    <th>趣味</th>
                    <td>
                        <input type="text"  value="">
                    </td>
                </tr>
                <tr>
                    <th>性格</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>その他</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <br>
    <input type="submit" form="user_create" value="登録">
    <button type="button" onclick="location.href='{{ route('users') }}' ">戻る</button>
</body>
</html>