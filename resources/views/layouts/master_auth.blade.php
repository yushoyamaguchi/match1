<!DOCTYPE HTML>
<html lang="ja">
<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />
<header>
<meta charset="utf-8">
<ul>
<li><a href="{{route('people.logout')}}">ログアウト</a> </li>
<li><a href="{{route('people.profile')}}">ホーム</a> </li>
<li><a href="{{route('contents.makeposts')}}">募集を投稿</a> </li>
<li><a href="{{route('contents.list')}}">自分の募集投稿</a> </li>
<li><a href="{{route('contents.search')}}">募集一覧</a> </li>
<li><a href="{{route('contents.wait')}}">参加リクエスト</a> </li>
</ul>
</header>

<body>

@yield('main')

</body>
</html>
 