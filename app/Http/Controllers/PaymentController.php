<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use Mail;
use Carbon\Carbon;
use Session;
use Redirect;
use App\Payment;
use Auth;

class PaymentController extends Controller
{

  /**
  * Redirect the User to Paystack Payment Page
  * @return Url
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

public function makepayment(Request $request)
{
  $payment = new Payment;
  $payment->amount = $this->tofloat($request->amount);
  $payment->mysaving_id = $request->saving;
  $payment->user_id = Auth::user()->id;
  $payment->status = "0";
  $payment->save();

  $payment->reference = "OYSTER".$payment->user_id.$payment->rent_id.$payment->id;
  $payment->save();

  return view('pay', compact('payment'));
}

public function redirectToGateway()
{

    return Paystack::getAuthorizationUrl()->redirectNow();

}

/**
* Obtain Paystack payment information
* @return void
*/
public function handleGatewayCallback()
{
  $paymentDetails = Paystack::getPaymentData();
  $payment = Payment::find(session('paymentid'));

  if ($paymentDetails['status'] == 1){

    if ($payment->amount == $paymentDetails['data']['amount']/100){

      Session::flash('ref', $paymentDetails['data']['reference']);
      Session::flash('status', 'Fund Transfer Successful');
      Session::flash('amount', $payment->amount);
      Session::flash('success', 'Your transfer has been confirmed');


      $mysaving = $payment->mysaving;
      if($payment->status == '0'){
      $mysaving->balance = $mysaving->balance + $payment->amount;
      $mysaving->save();
      }

      $payment->status   = '1';
      $payment->paydate  = Carbon::now();
      $payment->save();
      /*
      $fileName = $paymentDetails['data']['reference'].'.pdf';
      $filePath = public_path().'/uploads/';
      $mailAttachment = $filePath.$fileName;
      */
      $data['paymentid']= $payment->id;
      /*
      $pdf = \App::make('dompdf');
      $pdf = \PDF::loadView('receipt', $data)->setPaper('a4')->setWarnings(false)->save($filePath.$fileName);
      */
      $dt = array( 'email' => trim($payment->user->email));

      Mail::queue('emails.receipt', $data, function($message) use ($dt)
      {

        $message->from('payments@oystercore.com', 'OysterCore')
        ->to($dt['email'])
        ->subject('Payment Confirmation!');

      });

    }
    else
    {
      Session::flash('error', 'Under Investigation');
      Session::flash('error_more', 'Transaction Pending Investigation as an unsual error occured');
      $payment->status   = '2';
      $payment->save();

    }
  }
  else
  {
    Session::flash('error', 'Under Investigation');
    Session::flash('error_more', 'Transaction Pending Investigation as an unsual error occured');
    $payment->status   = '2';
    $payment->save();

  }
  return view('paystatus', compact('payment'));
  //dd($paymentDetails);
  // Now you have the payment details,
  // you can store the authorization_code in your db to allow for recurrent subscriptions
  // you can then redirect or do whatever you want
}
}
