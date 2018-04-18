<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BannerCrudRequest as StoreRequest;
use App\Http\Requests\BannerCrudRequest as UpdateRequest;

class BannerCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel('App\Models\Banner');
        $this->crud->setRoute(config('backpack.base.route_prefix')  . '/banner');
        $this->crud->setEntityNameStrings('banner', 'banner');

        //$this->crud->setColumns(['Maskapai Name']);
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => "Title"
        ]);
		
		$this->crud->addField([
			'name' => 'title',
			'label' => 'Title'
		]);
		
		$this->crud->addColumn([
                                'name' => 'image',
                                'label' => "Image",
								'type' => 'image'
        ]);
		 $this->crud->addField([    // Image
                                'name' => 'image',
                                'label' => 'Image',
                                'type' => 'browse',
        ]);
		
		$this->crud->addColumn([
                                'name' => 'status',
                                'label' => "Status"
        ]);
		$this->crud->addField([    // ENUM
                                'name' => 'status',
                                'label' => 'Status',
                                'type' => 'enum',
        ]);					
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}