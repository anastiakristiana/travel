<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MaskapaiCrudRequest as StoreRequest;
use App\Http\Requests\MaskapaiCrudRequest as UpdateRequest;

class MaskapaiCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel('App\Models\Maskapai');
        $this->crud->setRoute(config('backpack.base.route_prefix')  . '/maskapai');
        $this->crud->setEntityNameStrings('maskapai', 'maskapais');

        //$this->crud->setColumns(['Maskapai Name']);
        $this->crud->addColumn([
                                'name' => 'maskapai_name',
                                'label' => "Maskapai Name"
        ]);
		
		$this->crud->addField([
			'name' => 'maskapai_name',
			'label' => 'Maskapai name'
		]);
		
		$this->crud->addColumn([
                                'name' => 'kode',
                                'label' => "Maskapai Code"
        ]);
		$this->crud->addField([
                                'name' => 'kode',
                                'label' => 'Maskapai Code',
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