<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\WorkoutRequest as StoreRequest;
use App\Http\Requests\WorkoutRequest as UpdateRequest;

/**
 * Class WorkoutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class WorkoutCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Workout');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/workout');
        $this->crud->setEntityNameStrings('workout', 'workouts');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();


        ##DATATABLES
        $this->crud->addColumn([
            'name' => 'team_id',
            'label' => 'Equipo', //trans('backpack::club.name'),
            'type' => 'select',
            'entity' => 'team', // the method that defines the relationship in your Model
            'attribute' => 'name',
            'model' => "App\Models\Team"
        ]);

        $this->crud->addColumn([
            'name' => 'number',
            'label' => 'Sesion número', //trans('backpack::club.name'),
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Fecha', //trans('backpack::club.name'),
            'type' => 'date'
        ]);


        ## FORM

        $this->crud->addField([
            'name' => 'team_id',
            'label' => 'Equipo',
            'type' => 'select',
            'entity' => 'team',
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Team"
        ]);

        $this->crud->addField([   // Textarea
            'name' => 'date',
            'label' => 'Fecha',
            'type' => 'date_picker',
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'es'
            ],
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Entrenamiento',//trans('backpack::categories.name') ,
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'number',
            'label' => 'Numero',//trans('backpack::categories.name') ,
            'type' => 'number',
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

//        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
//            'label' => "Tags",
//            'type' => 'select2_multiple',
//            'name' => 'tags', // the method that defines the relationship in your Model
//            'entity' => 'tags', // the method that defines the relationship in your Model
//            'attribute' => 'name', // foreign key attribute that is shown to user
//            'model' => "App\Models\Tag", // foreign key model
//            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
//            // 'select_all' => true, // show Select All and Clear buttons?
//        ]);



        // add asterisk for fields that are required in WorkoutRequest
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
