<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/NewAccountForm.css') }}" rel="stylesheet">
    <title>ユーザー新規登録画面</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="caption">ユーザー新規登録画面</h1>
            <form class="form" action="{{ route('NewAccountFormSubmit') }}" method="post">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control" id="password" name="password" placeholder="パスワード" value="{{ old('password') }}">
                    @if ($errors -> has('password'))
                        <p>{{ $errors -> first('password') }}</p>
                    @endif
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="アドレス" value="{{ old('email') }}">
                    @if ($errors -> has('email'))
                        <p>{{ $errors -> first('email') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn-register" name="register" value="register">新規登録</button>
                <button type="submit" class="btn-back" name="back" value="back">戻る</button>
            </form>
        </div>
    </div>
    </body>
</html>
