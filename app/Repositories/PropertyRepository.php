<?php 

namespace App\Repositories;

use App\Property;

class PropertyRepository 
{

    public function tofloat($num) 
    {
        $dotPos     = strrpos($num, '.');
        $commaPos   = strrpos($num, ',');
        $sep        = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
        ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

        if (!$sep) 
        {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        }

        return floatval(preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' . preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num))));
    }

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

    public function deleteProperty($id)
    {
        $property = Property::where('id', $id)->delete();
    }

    public function updateProperty($data)
    {
        $property->type         = $data->type;
        $property->city         = $data->city;
        $property->state        = $data->state;
        $property->price        = $this->tofloat($data->price);
        $property->title        = $data->title;
        $property->address      = $data->address;
        $property->description  = $data->description;
    }
}
