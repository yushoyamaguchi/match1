<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class PeopleController extends Controller
{
   public function getSignup(){
     return View('people.signup2');
   }
   
  public function getSignin()
  {
    return view('people.signin');
  }
   
   
public function postSignup(Request $request){
  // バリデーション
  $this->validate($request,[
    'univ_name' => 'required',
    'user_name' => 'required|unique:univs',
    'password' => 'required|min:6'
  ]);
 
  // DBインサート
  $users = new User([
    'univ_name' => $request->input('univ_name'),  
    'user_name' => $request->input('user_name'),
    'password' => bcrypt($request->input('password'))
  ]);
 
  // 保存
  $users->save();
 
  // リダイレクト
  return redirect()->action('PeopleController@getSignin');

}


public function getProfile(){
  return view('people.profile');
}


  public function postSignin(Request $request)
  {
  $this->validate($request,[
  'user_name' => 'required',
  'password' => 'required|min:6'
  ]);
 
  if(Auth::attempt(['user_name' => $request->input('user_name'), 'password' => $request->input('password')])){
  return redirect()->route('people.profile');
  }
  return redirect()->back();
  }


}
