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
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/

	public function tofloat($num) {
		$dotPos = strrpos($num, '.');
		$commaPos = strrpos($num, ',');
		$sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
		((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

		if (!$sep) {
			return floatval(preg_replace("/[^0-9]/", "", $num));
		}

		return floatval(
		preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
		preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
	);
}

public function index()
{
	$properties = Auth::user()->properties()->paginate(10);
	return view('pages.properties',compact('properties'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function getCreate()
{
	return view('pages.create_property');
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
	//
	$property = new Property;
	$property->user_id = Auth::user()->id;
	$property->title = $request->title;
	$property->type = $request->type;
	$property->address = $request->address;
	$property->city = $request->city;
	$property->state= $request->state;
	$property->description = $request->description;
	$property->price =$this->tofloat($request->price);
	$property->save();

	Session::flash('message', 'You have successfully added your property.');
	return redirect('/');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{

	$property = Property::where('id', $id)->first();
	if($property){

		return view('property', compact('property') );
	}
	else {
		$property = Property::find($id);
		if($property){
			Session::flash('error', 'The property you are navigating to is: '.$property->status);
			return redirect('/');
		}
		else{
			Session::flash('error', 'The property you are navigating to does not exist ');
			return redirect('home');
		}
	}

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





/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/


public function edit($id)
{
	$property= Property::find($id);
	if(Auth::user()->id ==$property->id or Auth::user()->role =='admin' )

	return view('editproperty', compact('property'));

	else abort('503');
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
	//
	$property=Property::find($id);

	$property->title = $request->title;
	$property->type = $request->type;
	$property->address = $request->address;
	$property->city = $request->city;
	$property->state= $request->state;
	$property->description = $request->description;
	$property->price =$this->tofloat($request->price);
	$property->save();


	Session::flash('message', 'Successfully edited property');
	return Redirect('home');

}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
	$property = Property::find($id);
	if(Auth::user()->id != $property->user_id or Auth::user()->role != 'admin')
	abort('404');
	else
	if(Auth::user()->id != $property->user_id or Auth::user()->role == 'admin')
	{
		$name   = $property->title;
		$property->delete();
	}
	else {
		$name  = $property->title;
		$property->status = '4';
		$property->save();
	}



	\Session::flash('message', 'property "'.$name.'" deleted successfully!');
	return redirect()->back();
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
