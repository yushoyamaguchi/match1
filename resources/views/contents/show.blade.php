@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > この投稿を削除 </h3>
<form action="/match1/public/contents/{{ $b->id }}" method="post">
@csrf
@method('DELETE')

<div class="pl-2">
<span id =" year"> 年月日：</span>
{{$b->year}}/{{$b->month}}/{{$b->date}}
</div>
<br/>
<div class="pl-2">
<span id =" year"> ホームorアウェイ：</span>
{{$b->HomeAway}}
</div>
<br/>
<div class="pl-2">
<span id =" year"> 備考：</span><br/>
{{$b->other}}
</div>
<br/>

<div class="pl-2">
<input type="submit" value="削除"/>
</div>


</body>
</html>

@endsection


