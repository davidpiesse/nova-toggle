<?php

namespace Davidpiesse\NovaToggle;

use Illuminate\Http\Request;

class ApiController
{
    public function index(\Laravel\Nova\Http\Requests\ResourceDetailRequest $request)
    {
        $resourceClass = $request->resource();
        $modelClass = $resourceClass::$model;
        $model = $modelClass::find($request->post('resourceId'));
        
        if($model) {
            $model->{$request->post('fieldName')} = $request->post('value');
            $model->save();
            
            return [
                'success' => true
            ];
        }
    
        return [
            'success' => false
        ];
    }
}
