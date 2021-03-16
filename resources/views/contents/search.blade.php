@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<h3 > 募集一覧 </h3>

<form action="{{url('/contents/search')}}" method="GET">
    
    <p>年<input type="text" name="year" id="year" placeholder="指定なしでも検索可能" >
    月
    
    <select name="date" id="month" >
    <option value="">いつでも</option>
    <option value="1">1月</option>
    <option value="2">2月</option>
    <option value="3">3月</option>
    <option value="4">4月</option>
    <option value="5">5月</option>
    <option value="6">6月</option>
    <option value="7">7月</option>
    <option value="8">8月</option>
    <option value="9">9月</option>
    <option value="10">10月</option>
    <option value="11">11月</option>
    <option value="12">12月</option>
    </select>
    日<select name="date" id="date" >
    <option value="">いつでも</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
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
    </p>
    </select>
    <br>
    <br>
    大学名
    <p><input type="text" name="keyword" id="keyword" placeholder="指定なしでも検索可能"></p>
    ホームorアウェイ
    <p><select name="HomeAway" id="HomeAway" >
    <option value="">どちらでも</option>
	<option value="Home">ホーム</option>
	<option value="Away">アウェイ</option>
	</p>
</select>
    <p><input type="submit" value="検索"></p>
</form>

<div class="mycontainer">
<table class ="table"> 
<tr> 
<th>大学名</th> 
<th>年月日</th> 
<th>ホームorアウェイ</th> 
<th>備考</th>  
</tr> 
@foreach ($records as $record) 
<tr> 
<td>{{ $record->univ_name}}</td> 
<td>{{ $record->year }}/{{ $record->month}}/{{ $record->date}}</td> 
<td>{{ $record->HomeAway}}</td> 
<td><p class="tdata"> {{ substr($record->other,0,20)." ..."}} </p> </td> 

<td> 
<a href ="detail/{{ $record->id }}">詳細 </a> 
</td> 

</tr> 
@endforeach 
</table>
{{ $records->links() }}
</div>


</body>
</html>

@endsection


