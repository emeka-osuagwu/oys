<?php 

namespace App\Repositories;

use App\Property;

class PropertyRepository 
{
    public function getAllProperty()
    {
        return Property::all();
    }
}
