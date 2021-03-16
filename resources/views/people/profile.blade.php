@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>
 
<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
  <body>
<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />

 <h3 > 練習試合マッチング:ホーム </h3>
 
<style>
table {
	border-collapse: collapse;
}
td {
	border: solid 1px;
	padding: 0.5em;
}
</style>

<div style="margin-top: 30px;">
</div>

あなたのユーザー情報

<div class="mycontainer">
<table class ="table"> 
<tr> 
<th>大学名</th> 
<th>ユーザーネーム</th>  
</tr> 

<tr> 
<td>{{ $prof->univ_name}}</td> 
<td>{{ $prof->user_name}}</td> 


</tr> 

</table>

</div>


</body>
</html>

@endsection




