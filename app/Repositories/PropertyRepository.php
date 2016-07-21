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

    public function createProperty($data)
    {
    	$create = [
    		"user_id" => $data['user_id'],
    		"title" => $data['title'],
    		"type" => $data['type'],
    		"address" => $data['address'],
    		"city" => $data['city'],
    		"state" => $data['state'],
    		"description" => $data['description'],
    		"price" => $data['price'],
    	];

    	Property::create($create);
    }
}
