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
<h1>ログイン</h1>

<form action="{{ route('user.login') }}" method="post">
@csrf

<input id="user_mail" type="email" name="user_mail"　value="{{ old('user_mail') }}" required autocomplete="email">
@if ($errors->has('user_mail'))
<span class="error">{{ $errors->first('user_mail')}}</span>
@endif

<input id="user_pass" type="password" name="user_pass" required autocomplete="current-password">
@if ($errors->has('user_pass'))
<span class="error">{{ $errors->first('user_pass')}}</span>
@endif

<button type="submit">ログイン</button>


</form>



</main>

<footer>
</footer>
</body>
</html>
