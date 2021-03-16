@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > 自分の募集投稿を編集 </h3>

<div class="mycontainer">
<table class ="table"> 
<tr> 
<th>年月日</th> 
<th>ホームorアウェイ</th> 
<th>備考</th>  
</tr> 
@foreach ($records as $record) 
<tr> 
<td>{{ $record->year }}/{{ $record->month}}/{{ $record->date}}</td> 
<td>{{ $record->HomeAway}}</td> 
<td><p class="tdata"> {{ substr($record->other,0,20)." ..."}} </p> </td> 
<td> 
<a href ="{{ $record->id }}">削除 </a> 
</td> 
</tr> 
@endforeach 
</table>
{{ $records->links() }}
</div>


</body>
</html>

@endsection


