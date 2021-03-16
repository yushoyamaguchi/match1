<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>
 
<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
  <body>
  

    <h2 > 新規登録ページ </h2>
    
<nav id="case-blue">
<ul class="clearfix">
<li><a href="{{route('people.signup')}}">新規登録</a></li>
<li><a href="{{route('people.login')}}">ログイン</a></li>


</ul>
</nav>
    
    <style>
table {
	border-collapse: collapse;
}
td {
	border: solid 1px;
	padding: 0.5em;
}
</style>
    
  <div class="row">
  <form action="{{ route('people.signup') }}" method="post" class="form-horizontal" style="margin-top: 50px;">
  <div class="form-group">
  
    <div class="form-group">
  <label class="col-sm-3 control-label" for="InputName">大学名</label>
  <div class="col-sm-9">
  <input type="text" name="univ_name" size="30" width="15" class="form-control" id="InputName" placeholder="大学名">
  <!--/.col-sm-10---></div>
  <!--/form-group--></div>
  
  <label class="col-sm-3 control-label" for="InputName">ユーザーネーム</label>
  <div class="col-sm-9">
  <input type="text" name="user_name" size="30" width="15" class="form-control" id="InputName" placeholder="ユーザーネーム">
  <!--/.col-sm-10---></div>
  <!--/form-group--></div>


  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputPassword">パスワード</label>
  <div class="col-sm-9">
  <input type="password" name="password" size="30" width="15" class="form-control" id="InputPassword" placeholder="パスワード">
  </div>
  <!--/form-group--></div>
  
  
    <div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">
  <button type="submit" class="btn btn-primary btn-block">新規登録</button>
  </div>
  <!--/form-group--></div>
  {{ csrf_field() }}
  
  </form>
  </body>
  
  </html>