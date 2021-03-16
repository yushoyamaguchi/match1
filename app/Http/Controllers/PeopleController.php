<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class PeopleController extends Controller
{	
  private $user;
   
   public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->user = \Auth::user();
            return $next($request);
        });
   }

   public function getSignup(){
     return View('people.signup2');
   }
   
  public function getLogin(){
    return view('people.login');
  }
   
  public function getTosignin(){
    return view('people.tosignin');
  }
  
  public function getLogout(){
  Auth::logout();
  return redirect()->route('people.login');
  }
   
public function postSignup(Request $request){
  // validation
  $this->validate($request,[
    'univ_name' => 'required|no_special_chars',
    'user_name' => 'required|unique:users|no_special_chars',
    'password' => 'required|min:6|no_special_chars'
  ]);
 
  // DB insert
  $users = new User([
    'univ_name' => $request->input('univ_name'),  
    'user_name' => $request->input('user_name'),
    'IsAllowed' =>'0',
    'password' => bcrypt($request->input('password'))
  ]);
 
  // save
  $users->save();
 
  // redirect
  //return redirect()->action('PeopleController@getTosignin');
  //return redirect()->back();
  return redirect()->route('people.tosignin');

}


public function getProfile(){
  $prof=$this->user;
  return view('people.profile',compact('prof'));
}


  public function postLogin(Request $request)
  {
  $this->validate($request,[
  'user_name' => 'required|no_special_chars',
  'password' => 'required|min:6|no_special_chars'
  ]);
 
  if(Auth::attempt(['user_name' => $request->input('user_name'), 'password' => $request->input('password'),'IsAllowed'=>'1'])){
  return redirect()->route('people.profile');
  }
  return redirect()->back();
  }




}
