<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model {
	use ObservantTrait;
	use Sluggable;
	
    protected $table = 'category';

	public function sluggable()
	{
		return [
			'seo' => [
				'source' => 'title'
			]
		];
	}
}
