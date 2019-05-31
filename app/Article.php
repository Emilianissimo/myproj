<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model
{
    //Mutators или преобразователи для автогенерации title в slug
	public function setSlugAttribute($value){
		$this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40)/* . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-'*/);
	}

    //Разрешенные поля 
	protected $fillable = ['title', 'slug', 'description_short', 'description','image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'viewed', 'created_by', 'modified_by'];

    //Полиморфные связи с категориями
	public function categories()
	{
		return $this->morphToMany('App\Category', 'categoryable');
	}

	public function scopeLastArticles($query, $count){
    	return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
