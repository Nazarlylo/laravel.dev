<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;
use App\Page;

class PageController extends CrudController{

    public function all($entity){
        parent::all($entity);
			$this->filter = \DataFilter::source(new Page);
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Title');
			$this->grid->add('seo', 'Seo');
			$this->grid->add('content', 'Content');
			$this->addStylesToGrid();



        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

			$this->edit = \DataEdit::source(new Page);

			$this->edit->label('Edit Page');

			$this->edit->add('title', 'Title', 'text')->rule('required');

			$this->edit->add('content', 'Content', 'redactor');

		    $this->edit->add('status','Status','checkbox');




        return $this->returnEditView();
    }
}

        