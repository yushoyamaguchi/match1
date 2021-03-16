<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Post;

use Auth;

class PostController extends Controller
{

   private $user;
   
   public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->user = \Auth::user();
            return $next($request);
        });
   }
   
   
   public function getMakeposts(){
     return View('contents.makeposts');
   }
   
   public function postMakeposts(Request $request){
   	 $local_user=$this->user;
     //Validation
     $this->validate($request,Post::$rules);
     
     $p = new Post([
     'user_name' =>($local_user->user_name),
     'univ_name' =>($local_user->univ_name),
     'user_id' =>($local_user->id),
     'year' => $request->input('year'),
     'month' => $request->input('month'),
     'date' => $request->input('day'),
     'HomeAway' => $request->input('HomeAway'),
     'other' => $request->input('other')
     ]);
     $p->save();
     return redirect()->route('people.profile');
   }
   
   
   public function list(){
   		$local_user=$this->user;
		$result=Post::where('user_id',$local_user->id)->orderBy('id','desc')->paginate(10);
		return view('contents.list',['records'=>$result]);	
   }
   
   public function search(Request $request){
   		$keyword = $request->input('keyword');
   		$homeaway = $request->input('HomeAway');
   		$year = $request->input('year');
   		$month = $request->input('month');
   		$date = $request->input('date');
   		$local_user=$this->user;
   		$query = Post::query();
   		if (!empty($keyword)) {
            $query->where('univ_name', 'LIKE', "%{$keyword}%");
        }
        if (!empty($homeaway)) {
            $query->where('HomeAway', $homeaway);
        }
        if (!empty($year)) {
            $query->where('year', $year);
        }
        if (!empty($month)) {
            $query->where('month', $month);
        }
        if (!empty($date)) {
            $query->where('date', $date);
        }
        $result=$query->where('user_id','!=',$local_user->id)->orWhereNull('user_id')->orderBy('id','desc')->paginate(10);
        return view('contents.search',['records'=>$result]);	
   }
   
   
   public function show($id){
    return view('contents.show',[
    	'b'=>Post::findOrFail($id)
    ]);
   }
   
   public function allow($id){
    return view('contents.allow',[
    	'b'=>User::findOrFail($id)
    ]);
   }
   
   public function allowing($id){
    $b=User::findOrFail($id);
    $b->IsAllowed='1';
    $b->save();
    return redirect('/contents/wait');
   }
   
   public function wait(){
    $result=User::where('IsAllowed','0')->orderBy('id','desc')->paginate(10);
    return view('contents.wait',['records'=>$result]);
   }
   
   public function detail($id){
    return view('contents.detail',[
    	'b'=>Post::findOrFail($id)
    ]);
   }
   
   public function destroy($id){
    $b=Post::findOrFail($id);
    $b->delete();
    return redirect('/contents/list');
   }
   

}
