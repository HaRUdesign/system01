
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>laravel</title>
  <meta name="description" content="テスト" />

</head>
<body>
<header>
</header>
<main>
<h1>登録確認</h1>

<form action="{{ route('admin.send') }}" method="post">
@csrf
<ul>
<li>苗字：{{ $input["admin_familyname"] }}</li>
<li>名前：{{ $input["admin_firstname"] }}</li>
<li>苗字(カナ)：{{ $input["admin_kana_familyname"] }}</li>
<li>名前(カナ)：{{ $input["admin_kana_firstname"] }}</li>

<li>メールアドレス：{{ $input["admin_mail"] }}</li>
<li>パスワード：{{ $input["admin_pass"] }}</li>

<li>生年月日：{{ $input["admin_birthday_year"] }}年{{ $input["admin_birthday_month"] }}月{{ $input["admin_birthday_day"] }}日</li>
</ul>

<input name="back" type="submit" value="戻る" />
<input type="submit" value="送信" />

</form>



</main>

<footer>
</footer>
</body>
</html>
