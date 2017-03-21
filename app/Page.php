<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class page extends Model {
	use ObservantTrait;
	
    protected $table = 'page';

}
