<!DOCTYPE html>
<html lang="ja" xml:lang="ja"><head>

<title>練習試合マッチング | TM Matching</title>
 
<link href="{{ url('/') }}/css/css.css" rel="stylesheet" type="text/css" />


 


<meta name="GENERATOR" content="MSHTML 11.00.9600.17105" /></head>
  
  <body>
  

    <h2 > ログインページ </h2>
    
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
  <div class="col-md-4 col-md-offset-4">
  <h3>サインイン</h3>
  @if(count($errors) >0)
  <div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  <form action="{{ route('people.login') }}" method="post">
  <div class="form-group">
  <label for="user name">ユーザーネーム</label>
  <input type="text" id="user_name" name="user_name" class="form-control">
  </div>
  <div class="form-group">
  <label for="password">パスワード</label>
  <input type="password" id="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">ログイン</button>
  {{ csrf_field() }}
  </form>
  </div>
  </div>
  
  
  </body>
  
  </html>