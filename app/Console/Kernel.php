<?php

namespace App\Console;

use Session;
use App\User;
use App\Rent;
use App\Earning;
use Auth;
use Mail;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
  /**
  * The Artisan commands provided by your application.
  *
  * @var array
  */
  protected $commands = [
    // Commands\Inspire::class,
  ];

  /**
  * Define the application's command schedule.
  *
  * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
  * @return void
  */
  protected function schedule(Schedule $schedule)
  {
    $schedule->call(function () {

      $rentsone = Rent::whereDate('expiry', '<', Carbon::today()->addMonth()->toDateString())->get();
      $rentsthree = Rent::whereDate('expiry', '<', Carbon::today()->addMonth(3)->toDateString())->get();

      foreach($rentsone as $rent){
        $data = array(
          'id' => $rent->id,
          'status' => 'Your Rent Is Less Than A Month From Expiry',
          'email' => $rent->user->email,

        );
        Mail::send('emails.expiry', $data, function ($message) use ($data) {
          $message->from('info@oyster.local', 'Rent Manager');
          $message->subject('Your Rent Is Less Than A Month From Expiry');
          $message->to($data['email']);
        });
      }
      foreach($rentsthree as $rent){
        $data = array(
          'id' => $rent->id,
          'status' => 'Your Rent Is Less Than Three Months From Expiry',
          'email' => $rent->user->email,
        );
        Mail::send('emails.expiry', $data, function ($message) use ($data) {
          $message->from('info@oyster.local', 'Rent Manager');
          $message->subject('Your Rent Is Less Than Three Months From Expiry');
          $message->to($data['email']);
        });
      }

      $earnings = Earning::where('status', '0')->whereDate('created_at', '<', Carbon::today()->subMonth()->toDateString())->get();
      foreach($earnings as $earning){

        $data = array(
          'id' => $earning->id,
          'status' => 'Your Rent Has Been Refunded To Your Account',
          'email' => $earning->rent->user->email,
        );
        Mail::send('emails.refundedT', $data, function ($message) use ($data) {
          $message->from('info@oyster.local', 'Rent Manager');
          $message->subject('Your Rent Has Been Refunded To Your Account');
          $message->to($data['email']);
        });

        $data = array(
          'id' => $earning->id,
          'status' => 'Your Earned Rent Has Been Refunded To Rent Occupant',
          'email' => $earning->user->email,
        );
        Mail::send('emails.refundedL', $data, function ($message) use ($data) {
          $message->from('info@oyster.local', 'Rent Manager');
          $message->subject('Your Earned Rent Has Been Refunded To Rent Occupant');
          $message->to($data['email']);
        });
        $rent = $earning->rent;
        $rent->expiry =
        $mysaving = $earning->rent->user->mysaving;
        $mysaving->balance = $mysaving->balance + $earning->amount;
        $mysaving->save();
        $earning->delete();


      }
    })->daily()->at('15:00');

  }
}
