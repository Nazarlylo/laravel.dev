<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model {
	use ObservantTrait;
	use Sluggable;
	
    protected $table = 'page';


	public function sluggable()
	{
		return [
			'seo' => [
				'source' => 'title'
			]
		];
	}
}
