<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ExerciseRequest as StoreRequest;
use App\Http\Requests\ExerciseRequest as UpdateRequest;

/**
 * Class ExerciseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ExerciseCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Exercise');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/exercise');
        $this->crud->setEntityNameStrings('exercise', 'exercises');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns

        //$this->crud->setFromDb();


//        $this->crud->removeColumn('number');
//        $this->crud->removeColumn('description');
//        $this->crud->removeColumn('material');
//        $this->crud->removeColumn('image');
//        $this->crud->removeColumn('active');

        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Nombre', //trans('backpack::club.name'),
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'objetive',
            'label' => 'Objetivo', //trans('backpack::club.name'),
            'type' => 'text'
        ]);

        // n-n relationship (with pivot table)

        $this->crud->addColumn([
            'label' => 'Tags', // Table column heading
            'type' => 'select_multiple',
            'name' => 'tags', // the column that contains the ID of that connected entity;
            'entity' => 'tags', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Tag" // foreign key model

        ]);

        $this->crud->addColumn([
            'name' => 'duration',
            'label' => 'Duración (min)', //trans('backpack::club.name'),
            'type' => 'number'
        ]);




        ## FORM

        $this->crud->addField([
            'label' => 'Categoría',//trans('backpack::categories.name') ,
            'type' => 'select2_multiple',
            'name' => 'tags', // the method that defines the relationship in your Model
            'entity' => 'tags', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Tag", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            // 'select_all' => true, // show Select All and Clear buttons?
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Nombre',//trans('backpack::categories.name') ,
            'type' => 'text',
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'objetive',
            'label' => 'Objetivos',
            'type' => 'textarea'
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'materials',
            'label' => 'Materiales',
            'type' => 'textarea'
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'description',
            'label' => 'Descripción',
            'type' => 'textarea'
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'duration',
            'label' => 'Duración en minutos',
            'type' => 'number'
        ]);

        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Imagen',
            'type' => 'browse',
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'active',
            'label' => 'Activo',
            'type' => 'radio',
            'options'     => [ // the key will be stored in the db, the value will be shown as label;
                1 => "Activo",
                0 => "Inactivo"

            ],
            "default" => 1
        ]);


        // add asterisk for fields that are required in ExerciseRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
