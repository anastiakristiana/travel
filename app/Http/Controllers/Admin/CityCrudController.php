<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CityCrudRequest as StoreRequest;
use App\Http\Requests\CityCrudRequest as UpdateRequest;

class CityCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel('App\Models\City');
        $this->crud->setRoute(config('backpack.base.route_prefix')  . '/city');
        $this->crud->setEntityNameStrings('city', 'cities');

        //$this->crud->setColumns(['City Name']);
        $this->crud->addColumn([
                                'name' => 'city_name',
                                'label' => "City Name"
        ]);
		
		$this->crud->addField([
			'name' => 'city_name',
			'label' => 'City name'
		]);
		
		$this->crud->addColumn([
                                'name' => 'kode',
                                'label' => "City Code"
        ]);
		$this->crud->addField([
                                'name' => 'kode',
                                'label' => 'City Code',
        ]);
		$this->crud->addColumn([
                                'name' => 'bandara',
                                'label' => "Bandar Udara"
        ]);
		$this->crud->addField([
                                'name' => 'bandara',
                                'label' => 'Bandar Udara',
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