<?php 

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Posts;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class PostsController extends CrudController{

    public function all($entity){

        parent::all($entity);
			$this->filter = \DataFilter::source(Posts::with('category'));
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Title');
			$this->grid->add('content', 'Content');
		    $this->grid->add('{{ $category->title}}', 'Category');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
	
			$this->edit = \DataEdit::source(new Posts);

			$this->edit->label('Edit Posts');

			$this->edit->add('title', 'Title', 'text');
		
			$this->edit->add('content', 'Content', 'redactor');

		     $this->edit->add('image', 'Image', 'image')->move('uploads/images/')->preview(80,80);

		     $this->edit->add('category_id','Category','select')->options(Category::pluck("title", "id")->all());




       
        return $this->returnEditView();
    }    
}
