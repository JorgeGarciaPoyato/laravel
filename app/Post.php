<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
	protected $fillable = ['title','excerpt','body','user_id','category_id','grade_id','created_at','updated_at'];


	public function category(){
		return $this->belongsTo(Category::class);
	}

	public function grade(){
		return $this->belongsTo(Grade::class);
	}


}
