@extends('layouts.master_auth')
@section('main')
<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>


<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
<body>
<div style="margin-top: 30px;">

<div id="contents">  


 <h3 > 投稿ページ </h3>
 
<style>
table {
	border-collapse: collapse;
}
td {
	border: solid 1px;
	padding: 0.5em;
}
</style>



<form action="{{ route('contents.makeposts') }}" method="post">
年月日
<br>
<select name="year" id="id_year">
</select>
<select name="month" id="id_month">
</select>
<select name="day" id="id_day">
</select>
<script>
(function() {
  'use strict';

  /*
    今日の日付データを変数todayに格納
   */
  var optionLoop, this_day, this_month, this_year, today;
  today = new Date();
  this_year = today.getFullYear()+100;
  this_month = today.getMonth() + 1;
  this_day = today.getDate();

  /*
    ループ処理（スタート数字、終了数字、表示id名、デフォルト数字）
   */
  optionLoop = function(start, end, id, this_day) {
    var i, opt;

    opt = null;
    for (i = start; i <= end ; i++) {
      if (i === this_day) {
        opt += "<option value='" + i + "' selected>" + i + "</option>";
      } else {
        opt += "<option value='" + i + "'>" + i + "</option>";
      }
    }
    return document.getElementById(id).innerHTML = opt;
  };


  /*
    関数設定（スタート数字[必須]、終了数字[必須]、表示id名[省略可能]、デフォルト数字[省略可能]）
   */
  optionLoop(2021, this_year, 'id_year', this_year-100);
  optionLoop(1, 12, 'id_month', this_month);
  optionLoop(1, 31, 'id_day', this_day);
})();

</script>

<br>

ホームorアウェイ
<br>
<select name="HomeAway" id="HomeAway" >
<option value="Home">ホーム</option>
<option value="Away">アウェイ</option>
<option value="Any">どちらでも</option>
</select>
<br>
<br>
その他(カテゴリ、本数、時間帯など)
<br>
<textarea name="other" id="other" cols="50" rows="10"></textarea>
<br>

<button type="submit" class="btn btn-primary">送信</button>
 {{ csrf_field() }}


</form>
</div>
</div>





<!--
埋め込みオンラインカレンダー
<div id="sidebar">
 <script async id='calinc-mem137333-height500' type="text/javascript" src="//freecalend.com/jstac/calinc.js"></script>  
</div>
-->

</body>
</html>

@endsection


