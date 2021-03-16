@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > 参加リクエスト </h3>

<div class="mycontainer">
<table class ="table"> 
<tr> 
<th>チーム名</th> 

 
</tr> 
@foreach ($records as $record) 
<tr> 
<td>{{ $record->univ_name }}</td> 
<td> 
<a href ="allow/{{ $record->id }}">許可 </a> 
</td> 
</tr> 
@endforeach 
</table>
{{ $records->links() }}
</div>


</body>
</html>

@endsection


