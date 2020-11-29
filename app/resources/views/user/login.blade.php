
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
<h1>ログイン</h1>

<form method="POST" action="{{ route('user.login') }}">
@csrf

<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
</form>

@error('email')
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
@enderror

<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

</main>

<footer>
</footer>
</body>
</html>
