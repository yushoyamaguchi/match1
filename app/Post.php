<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
       'user_id','user_name','univ_name', 'year','month','date','HomeAway','other'
    ];
    
    public static $rules =[
    	'year' => 'required|no_special_chars',
    	'month' => 'required|no_special_chars',
    	'day' => 'required|no_special_chars',
    	'HomeAway' => 'required|no_special_chars',
    	'other' => 'no_special_chars'
    ];
}
