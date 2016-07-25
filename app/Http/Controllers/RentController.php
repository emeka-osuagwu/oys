<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Rent;
use App\Earning;
use App\Property;
use Auth;
use Mail;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests;

class RentController extends Controller
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
  //

  $rents = Rent::with('user', 'property')->get();
  return view('pages.rents',compact('rents'));
}

public function propertyRent($id)
{
  //
  $property = Property::find($id);
  $rents= $property->rents()->paginate(10);
  return view('rents',compact('rents'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/

public function create()
{
  $properties = $this->propertyRepository->getAllProperty();
  return view('pages.create_rent', compact('properties'));

}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function postCreate(Request $request)
{

  if(Auth::user()->id == 'rent()->id')
  {
    $status = $request->status;
  }
  else {
    $status = '0';
  }
  

  $rent = new Rent;
  $rent->user_id = Auth::user()->id;
  $rent->property_id = (int) $request->property_id;
  $rent->description = $request->description;
  $rent->expiry = $request->expiry;
  $rent->tenor = $request->tenor;
  $rent->actual_rent = $this->tofloat($request->actual_rent);
  $rent->rent_paid = $this->tofloat($request->rent_paid);
  $rent->status=$status;
  $rent->save();

  Session::flash('message', 'You have successfully added your new rent.');
  return redirect('/');



}
public function payrent(Request $request)
{
  //
  $rent = Rent::find($request->rent);
  $tenor = 0;
  $expiry = $rent->expiry;
  if(Auth::user()->mysaving->balance < $request->tenor)

  {
    Session::flash('warning', 'You have insufficent balance in your savings, please top up with: '.$request->tenor - Auth::user()->mysaving->balance);
    return redirect('savings');
  }
  else

  if($rent->actual_rent/$request->tenor == '12'){
    $tenor = 0;

  }
  if($rent->actual_rent/$request->tenor == '4'){
    $tenor = 1;

  }

  if($rent->actual_rent/$request->tenor == '2'){
    $tenor = 2;

  }

  if($rent->actual_rent/$request->tenor == '1'){
    $tenor = 3;

  }


  $rent->expiry = $expiry;
  $rent->rent_paid = $rent->rent_paid + $request->tenor;
  $rent->save();



  $earning = new Earning;
  $earning->amount = $request->tenor;
  $earning->rent_id=$request->rent;
  $earning->tenor=$tenor;
  $earning->user_id=$rent->property->user_id;
  $earning->save();

  $mysaving = Auth::user()->mysaving;
  $mysaving->balance = $mysaving->balance - $request->tenor;
  $mysaving->save();

  Session::flash('message', 'You have initiated Rent Payment, we will process the payment and alert you on confirmation.');
  return redirect('rents');



}

public function storePropertyRent(Request $request)
{
  //
  if(isset($request->email)){
    $user = User::where('email', $request->email)->first();

    if(!isset($user)){
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->save();
    }
    $userid = $user->id;
    $status = '1';
  }
  else {
    $status = '0';
    $userid = '0';
  }

  $rent = new Rent;
  $rent->user_id = $userid;
  $rent->property_id = $request->propertyid;
  $rent->description = $request->description;
  $rent->expiry = $request->expiry;
  $rent->tenor = $request->tenor;
  $rent->actual_rent = $this->tofloat($request->actual_rent);
  $rent->rent_paid = $this->tofloat($request->rent_paid);
  $rent->status=$status;
  $rent->save();

  if($userid != '0'){
    $data = array(
      'id' => $rent->id,
      'owneremail' => $rent->property->user->email,
      'occupantemail' => $rent->user->email,

    );
    Mail::send('emails.newrent', $data, function ($message) use ($data) {
      $message->from('info@oyster.local', 'Rent Manager');
      $message->subject('You have been registered as rent occupant');
      $message->to($data['occupantemail']);
    });
  }

  Session::flash('message', 'You have successfully added your new rent.');
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
  {
    $rent = Rent::where('id', $id)->first();
    if($rent){

      return view('rent', compact('rent') );
    }
    else {
      $rent = Rent::find($id);
      if($rent){
        Session::flash('error', 'The rent you are navigating to is: '.$rent->status);
        return redirect('/');
      }
      else{
        Session::flash('error', 'The rent you are trying to view does not exist ');
        return redirect('/');
      }
    }
  }

}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function myrent()
{
  $rent= Rent::find($id);

  if(Auth::user()->id == $rent->id)
  {
    $rent = Rent::paginate(3);
    return view('my/rent', compact('rent'));
  }
  else abort('503');
}

public function edit($id)
{
  //
  $properties = $this->propertyRepository->getAllProperty();
  $rent= Rent::find($id);
  if(Auth::user()->id ==$rent->id or Auth::user()->role =='admin' )

  return view('pages.edit_rent', compact('rent', 'properties'));

  else abort('503');
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request)
{
  
  $rent = Rent::find($request['rent_id']);

  if(Auth::user()->id != $rent->user_id and Auth::user()->role != 'admin')
  abort('404');
  else
  if(Auth::user()->role == 'admin')
  {
    $status = $request->status;
  }
  else {
    $status = '0';
  }
  $rent->description = $request->description;
  $rent->tenor = $request->tenor;
  $rent->expiry = $request->expiry;
  $rent->actual_rent = $this->tofloat($request->actual_rent);
  $rent->rent_paid = $this->tofloat($request->rent_paid);
  $rent->status=$status;
  $rent->save();

  Session::flash('message', 'Successfully edited your rent');
  return Redirect('rents');

}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function delete($id)
{
  Rent::find($id)->delete();
  return bacl();
}

public function earnings()
{

  $earnings = Auth::user()->earnings();
  return view('pages.earnings', compact('earnings'));
  //
}


public function requestPayout(Request $request)
{
  $earning = Earning::find($request->earning);
  $earning->status = "1";
  $earning->save();

  $rent = Rent::find($earning->rent);
  if($earning->tenor == '0'){
    $expiry = Carbon\Carbon($rent->expiry)->addMonth();


  }
  if($earning->tenor == '1'){
    $expiry = Carbon\Carbon($rent->expiry)->addMonths(3);


  }

  if($earning->tenor == '2'){
    $expiry = Carbon\Carbon($rent->expiry)->addMonths(6);


  }

  if($earning->tenor == '3'){
    $expiry = Carbon\Carbon($rent->expiry)->addYear();


  }


  $rent->expiry = $expiry;
  $rent->rent_paid = $rent->rent_paid + $earning->amount;
  $rent->save();

  Session::flash('message', 'Pay Out Request Received, We Will Be In Touch.');
  return Redirect::back();
}
}
