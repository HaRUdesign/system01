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

<form action="{{ route('user.confirm') }}" method="post">
@csrf

<ul>
<li>苗字：<input type="text" name="user_familyname" value="{{ old('user_familyname') }}"></li>
@if ($errors->has('user_familyname'))
<span class="error">{{ $errors->first('user_familyname')}}</span>
@endif

<li>名前：<input type="text" name="user_firstname" value="{{ old('user_firstname') }}"></li>
@if ($errors->has('user_firstname'))
<span class="error">{{ $errors->first('user_firstname')}}</span>
@endif

<li>苗字(カナ)：<input type="text" name="user_kana_familyname" value="{{ old('user_kana_familyname') }}"></li>
@if ($errors->has('user_kana_familyname'))
<span class="error">{{ $errors->first('user_kana_familyname')}}</span>
@endif

<li>名前(カナ)：<input type="text" name="user_kana_firstname" value="{{ old('user_kana_firstname') }}"></li>
@if ($errors->has('user_kana_firstname'))
<span class="error">{{ $errors->first('user_kana_firstname')}}</span>
@endif

<li>性別：
<input id="men" name="user_sex" type="radio" value="男性" @if(old('user_sex')==='男性') checked="checked" @endif><label for="men">男性</label>
<input id="women" name="user_sex" type="radio" value="女性" @if(old('user_sex')==='女性') checked="checked" @endif><label for="women">女性</label></li>
@if ($errors->has('user_sex'))
<span class="error">{{ $errors->first('user_sex')}}</span>
@endif

<li>メールアドレス：<input type="email" name="user_mail" value="{{ old('user_mail') }}"></li>
@if ($errors->has('user_mail'))
<span class="error">{{ $errors->first('user_mail')}}</span>
@endif

<li>パスワード(8文字以上20文字以内/半角英数字のみ)：<input type="password" name="user_pass" value="{{ old('user_pass') }}"></li>
@if ($errors->has('user_pass'))
<span class="error">{{ $errors->first('user_pass')}}</span>
@endif

 <li>確認用：<input type="password" name="user_pass_confirmation">
 @if ($errors->has('user_pass_confirmation'))
<span class="error">{{ $errors->first('user_pass_confirmation')}}</span>
@endif


<li>電話番号(半角数字/ハイフンなし)：<input type="text" name="user_tel" value="{{ old('user_tel') }}"></li>
@if ($errors->has('user_tel'))
<span class="error">{{ $errors->first('user_tel')}}</span>
@endif

<li>住所：
<select name="user_address">
<option value="">選択してください</option>
<option value="北海道" @if(old('user_address')==='北海道') selected @endif>北海道</option>
<option value="青森県" @if(old('user_address')==='青森県') selected @endif>青森県</option>
<option value="岩手県" @if(old('user_address')==='岩手県') selected @endif>岩手県</option>
<option value="宮城県" @if(old('user_address')==='宮城県') selected @endif>宮城県</option>
<option value="秋田県" @if(old('user_address')==='秋田県') selected @endif>秋田県</option>
<option value="山形県" @if(old('user_address')==='山形県') selected @endif>山形県</option>
<option value="福島県" @if(old('user_address')==='福島県') selected @endif>福島県</option>
<option value="茨城県" @if(old('user_address')==='茨城県') selected @endif>茨城県</option>
<option value="栃木県" @if(old('user_address')==='栃木県') selected @endif>栃木県</option>
<option value="群馬県" @if(old('user_address')==='群馬県') selected @endif>群馬県</option>
<option value="埼玉県" @if(old('user_address')==='埼玉県') selected @endif>埼玉県</option>
<option value="千葉県" @if(old('user_address')==='千葉県') selected @endif>千葉県</option>
<option value="東京都" @if(old('user_address')==='東京都') selected @endif>東京都</option>
<option value="神奈川県" @if(old('user_address')==='神奈川県') selected @endif>神奈川県</option>
<option value="新潟県" @if(old('user_address')==='新潟県') selected @endif>新潟県</option>
<option value="富山県" @if(old('user_address')==='富山県') selected @endif>富山県</option>
<option value="石川県" @if(old('user_address')==='石川県') selected @endif>石川県</option>
<option value="福井県" @if(old('user_address')==='福井県') selected @endif>福井県</option>
<option value="山梨県" @if(old('user_address')==='山梨県') selected @endif>山梨県</option>
<option value="長野県" @if(old('user_address')==='長野県') selected @endif>長野県</option>
<option value="岐阜県" @if(old('user_address')==='岐阜県') selected @endif>岐阜県</option>
<option value="静岡県" @if(old('user_address')==='静岡県') selected @endif>静岡県</option>
<option value="愛知県" @if(old('user_address')==='愛知県') selected @endif>愛知県</option>
<option value="三重県" @if(old('user_address')==='三重県') selected @endif>三重県</option>
<option value="滋賀県" @if(old('user_address')==='滋賀県') selected @endif>滋賀県</option>
<option value="京都府" @if(old('user_address')==='京都府') selected @endif>京都府</option>
<option value="大阪府" @if(old('user_address')==='大阪府') selected @endif>大阪府</option>
<option value="兵庫県" @if(old('user_address')==='兵庫県') selected @endif>兵庫県</option>
<option value="奈良県" @if(old('user_address')==='奈良県') selected @endif>奈良県</option>
<option value="和歌山県" @if(old('user_address')==='和歌山県') selected @endif>和歌山県</option>
<option value="鳥取県" @if(old('user_address')==='鳥取県') selected @endif>鳥取県</option>
<option value="島根県" @if(old('user_address')==='島根県') selected @endif>島根県</option>
<option value="岡山県" @if(old('user_address')==='岡山県') selected @endif>岡山県</option>
<option value="広島県" @if(old('user_address')==='広島県') selected @endif>広島県</option>
<option value="山口県" @if(old('user_address')==='山口県') selected @endif>山口県</option>
<option value="徳島県" @if(old('user_address')==='徳島県') selected @endif>徳島県</option>
<option value="香川県" @if(old('user_address')==='香川県') selected @endif>香川県</option>
<option value="愛媛県" @if(old('user_address')==='愛媛県') selected @endif>愛媛県</option>
<option value="高知県" @if(old('user_address')==='高知県') selected @endif>高知県</option>
<option value="福岡県" @if(old('user_address')==='福岡県') selected @endif>福岡県</option>
<option value="佐賀県" @if(old('user_address')==='佐賀県') selected @endif>佐賀県</option>
<option value="長崎県" @if(old('user_address')==='長崎県') selected @endif>長崎県</option>
<option value="熊本県" @if(old('user_address')==='熊本県') selected @endif>熊本県</option>
<option value="大分県" @if(old('user_address')==='大分県') selected @endif>大分県</option>
<option value="宮崎県" @if(old('user_address')==='宮崎県') selected @endif>宮崎県</option>
<option value="鹿児島県" @if(old('user_address')==='鹿児島県') selected @endif>鹿児島県</option>
<option value="沖縄県" @if(old('user_address')==='沖縄県') selected @endif>沖縄県</option>
</select>
</li>
@if ($errors->has('user_address'))
<span class="error">{{ $errors->first('user_address')}}</span>
@endif



<li>生年月日：
<select name="user_birthday_year">
<option value="">-</option>
<option value="1900">1900</option>
<option value="1901">1901</option>
<option value="1902">1902</option>
<option value="1903">1903</option>
<option value="1904">1904</option>
<option value="1905">1905</option>
<option value="1906">1906</option>
<option value="1907">1907</option>
<option value="1908">1908</option>
<option value="1909">1909</option>
<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>　年
@if ($errors->has('user_birthday_year'))
<span class="error">{{ $errors->first('user_birthday_year')}}</span>
@endif

<select name="user_birthday_month">
<option value="">-</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>　月
@if ($errors->has('user_birthday_month'))
<span class="error">{{ $errors->first('user_birthday_month')}}</span>
@endif

<select name="user_birthday_day">
<option value="">-</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>　日
@if ($errors->has('user_birthday_day'))
<span class="error">{{ $errors->first('user_birthday_day')}}</span>
@endif

<li>ニュースレター：
<input type="hidden" name="user_newsletter" value="no">
<input checked="checked" name="user_newsletter" type="checkbox" value="yes">
</li>
@if ($errors->has('user_newsletter'))
<span class="error">{{ $errors->first('user_newsletter')}}</span>
@endif

<li>コメント(5000文字以内)：<textarea name="user_comment">{{ old('user_comment') }}</textarea></li>
</ul>
@if ($errors->has('user_comment'))
<span class="error">{{ $errors->first('user_comment')}}</span>
@endif

<input type="submit" value="登録する">

</form>



</main>

<footer>
</footer>
</body>
</html>
