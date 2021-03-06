<?php 

namespace App;


use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;
use Cviebrock\EloquentSluggable\Sluggable;


class Posts extends Model {
	use ObservantTrait;
	use Sluggable;
	
    protected $table = 'posts';

	/**
	 * A user may have multiple category.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function category()
	{
		return $this->belongsTo('App\Category','category_id','id');
	}

	public function sluggable()
	{
		return [
			'seo' => [
				'source' => 'title'
			]
		];
	}

}
