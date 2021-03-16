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
            // 
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
   
   public function search(){
   		$local_user=$this->user;
		$result=Post::where('user_id','!=',$local_user->id)->orWhereNull('user_id')->orderBy('id','desc')->paginate(10);
		return view('contents.search',['records'=>$result]);	
   }
   
   public function edit($id){
    return view('contents.edit',[
    	'b'=>Post::findOrFail($id)
    ]);
   }
   
   public function show($id){
    return view('contents.show',[
    	'b'=>Post::findOrFail($id)
    ]);
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
