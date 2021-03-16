@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > このユーザーの参加を許可 </h3>
<form action="{{ $b->id }}" method="post">
@csrf


<div class="pl-2">
<span id =" year"> チーム名：</span>
{{$b->univ_name}}
</div>
<br/>

<div class="pl-2">
<input type="submit" value="許可"/>
</div>


</body>
</html>

@endsection


