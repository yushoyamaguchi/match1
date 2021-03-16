@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > 詳細 </h3>
<form action="/match1/public/contents/{{ $b->id }}" method="post">
@csrf
@method('DELETE')

<div class="pl-2">
<span id =" year"> 大学名：</span>
{{$b->univ_name}}
</div>
<br/>
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




</body>
</html>

@endsection


