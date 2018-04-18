<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PriceCrudRequest as StoreRequest;
use App\Http\Requests\PriceCrudRequest as UpdateRequest;

class PriceCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel('App\Models\Price');
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin')  . '/price');
        $this->crud->setEntityNameStrings('price', 'prices');

		$this->crud->addColumn([
                                'name' => 'id_maskapai',
                                'label' => "Maskapai"
        ]);
		
		
		
		$this->crud->addColumn([
                                'name' => 'id_kota_asal',
                                'label' => "Kota asal"
        ]);
		

		$this->crud->addColumn([
                                'name' => 'id_kota_tujuan',
                                'label' => "Kota tujuan"
        ]);
		
		$this->crud->addColumn([
                                'name' => 'harga',
                                'label' => "Harga"
        ]);

		
		$this->crud->addColumn([
                                'name' => 'keterangan',
                                'label' => "Keterangan"
        ]);
		$this->crud->addField([
								'label' => 'Maskapai',
                                'type' => 'select',
                                'name' => 'id_maskapai',
                                'entity' => 'maskapai',
                                'attribute' => 'maskapai_name',
                                'model' => "App\Models\Maskapai",
		]);
		$this->crud->addField([
                                'label' => 'Kota asal',
                                'type' => 'select',
                                'name' => 'id_kota_asal',
                                'entity' => 'city',
                                'attribute' => 'city_name',
                                'model' => "App\Models\City",
        ]);
		$this->crud->addField([
                                'label' => 'Kota tujuan',
                                'type' => 'select',
                                'name' => 'id_kota_tujuan',
                                'entity' => 'city',
                                'attribute' => 'city_name',
                                'model' => "App\Models\City",
        ]);
		$this->crud->addField([
                                'name' => 'harga',
                                'label' => 'Harga',
        ]);
		$this->crud->addField([
                                'name' => 'keterangan',
                                'label' => 'Keterangan',
        ]);

        $this->crud->enableAjaxTable();					
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