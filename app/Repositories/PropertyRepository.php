<?php 

namespace App\Repositories;

use App\Property;

class PropertyRepository 
{
    public function getAllProperty()
    {
        return Property::with('user')->all();
    }

    public function getPropertyWhere($field, $value)
    {
        return Property::with('user')->where($field, $value)->get();
    }
}
