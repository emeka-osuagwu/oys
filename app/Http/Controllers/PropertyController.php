<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\User;
use Session;
use Redirect;
use App\Http\Requests;
use Auth;
class PropertyController extends Controller
{
	public function index()
	{
		$properties = $this->propertyRepository->getPropertyWhere('id', Auth::user()->id);
		return view('pages.properties',compact('properties'));
	}

	public function getCreate()
	{
		return view('pages.create_property');
	}

	public function postCreate(Request $request)
	{
		$request['price'] 		= $this->tofloat($request->price);
		$request['user_id'] 	= Auth::user()->id;

		$this->propertyRepository->createProperty($request->all());

		Session::flash('message', 'You have successfully added your property.');
		return back();
	}

	public function show($id)
	{
		$property = Property::where('id', $id)->first();
		return view('pages.property', compact('property') );
	}

	public function myproperty()
	{
		$property= Property::find($id);

		if(Auth::user()->id == $property->id)
		{
			$property = Property::paginate(3);
			return view('my/property', compact('property'));
		}
		else abort('503');
	}

	public function edit($id)
	{
		$property = $this->propertyRepository->getPropertyWhere('id', $id)->first();

		return view('pages.edit_property', compact('property'));
	}

	public function update(Request $request)
	{
		$this->propertyRepository->updateProperty($request->all());

		Session::flash('message', 'Successfully edited property');
		return Redirect('/property/' . $request['property_id'] . '/edit');
	}

	public function delete($id)
	{
		$property = Property::find($id);
		
		if (Auth::user()->id == $property->user_id) 
		{
			$this->propertyRepository->deleteProperty($id);
			session()->flash('message', 'property "'.$property->namespace.'" deleted successfully!');
		}
		else
		{
			return back();
		}
	}

	public function singleproperty($id)
	{
		$property=Property::find($id);
		$rents = $property->rents()->get();

		return view('singleproperty', compact('rents'));
	}

	public function tenantdetails($id)
	{
		$user=User::find($id);
		return view('occupant',compact('user'));
	}

}
