<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends CrudController{

    public function all($entity){
        parent::all($entity);
			$this->filter = \DataFilter::source(new Category);
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Title');
			$this->grid->add('seo', 'Seo');
			$this->grid->add('description', 'Description');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
	
			$this->edit = \DataEdit::source(new Category);

			$this->edit->label('Edit Category');

		    $this->edit->add('parent_id', '', 'auto')->insertValue('0');

			$this->edit->add('title', 'Title', 'text');

			$this->edit->add('description', 'Description', 'redactor');



       
        return $this->returnEditView();
    }    
}
