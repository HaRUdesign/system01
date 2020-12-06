<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="description" content="テスト" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<header>
</header>
<main>
<h1>ユーザー登録</h1>

<form action="{{ route('user.register') }}" method="post">
@csrf
<ul>
<li>苗字：{{ $input["user_familyname"] }}</li>
<li>名前：{{ $input["user_firstname"] }}</li>
<li>苗字(カナ)：{{ $input["user_kana_familyname"] }}</li>
<li>名前(カナ)：{{ $input["user_kana_firstname"] }}</li>

<li>性別：{{ $input["user_sex"] }}</li>

<li>メールアドレス：{{ $input["user_mail"] }}</li>
<li>パスワード：{{ $input["user_pass"] }}</li>
<li>電話番号：{{ $input["user_tel"] }}</li>
<li>住所：{{ $input["user_address"] }}</li>
<li>生年月日：{{ $input["user_birthday_year"] }}年{{ $input["user_birthday_month"] }}月{{ $input["user_birthday_day"] }}日</li>
<li>ニュースレターを配信する：
{{ $input["user_newsletter"] }}
</li>

<li>コメント：{{ $input["user_comment"] }}</li>
</ul>

<input name="back" type="submit" value="戻る" />
<input type="submit" value="送信" />

</form>



</main>

<footer>
</footer>
</body>
</html>
