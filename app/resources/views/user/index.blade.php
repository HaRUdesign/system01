
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
<h1>ユーザー一覧</h1>
@foreach($user_data as $item)
<ul>
  <li>{{ $item->user_id }}</li>
  <li>{{ $item->user_mail }}</li>
  <li>{{ $item->user_pass }}</li>
  <li>{{ $item->user_familyname }}</li>
  <li>{{ $item->user_firstname }}</li>
  <li>{{ $item->user_kana_familyname }}</li>
  <li>{{ $item->user_kana_firstname }}</li>
  <li>{{ $item->user_sex }}</li>
  <li>{{ $item->user_address }}</li>
  <li>{{ $item->user_birthday }}</li>
  <li>{{ $item->user_newsletter }}</li>
  <li>{{ $item->user_comment }}</li>
</ul>
<hr>
@endforeach





</main>

<footer>
</footer>
</body>
</html>
