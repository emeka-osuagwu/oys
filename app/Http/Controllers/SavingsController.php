<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Carbon\Carbon;
use App\Mysaving;
use App\Cashout;
use App\Account;
use App\Http\Requests;
use Illuminate\Http\Request;
use Redirect;

class SavingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $mysaving = Auth::user()->mysaving;
        if(isset($mysaving)){
          return view('pages.savings', compact('mysaving'));
        }
        return view('pages.newsavings');
    }

    public function history()
    {   
        return $payments = Auth::user()->mysaving->payments()->where('status', '1')->get();
        return view('history', compact('payments'));
    }

    public function cashoutsHistory()
    {   $cashouts = Auth::user()->cashouts()->get();
        return view('pages.cashoutshistory', compact('cashouts'));

    }

    public function store(Request $request)
    {
        $mysaving = Auth::user()->mysaving;
          if(isset($mysaving)){
            Session::flash('message', 'You have an active savings account.');
            return view('savings', compact('mysaving'));
          }
        $mysaving = new Mysaving;
        $mysaving->user_id = Auth::user()->id;
        $mysaving->target = $this->tofloat($request->target);
        $mysaving->tenor = $request->tenor;
        $mysaving->expiry = Carbon::now()->addDays($request->tenor);
        $mysaving->save();

        $account = new Account;
        $account->account_name = $request->accountname;
        $account->account_number = $request->accountno;
        $account->bank = $request->accountbank;
        $account->save();
        Session::flash('message', 'Great Job!! You have successfully created your savings.');
        return view('savings');
    }

    public function topup(Request $request)
    {
        $mysaving = new Mysaving;
        $mysaving->user_id = Auth::user()->id;
        $mysaving->target = $this->tofloat($request->target);
        $mysaving->tenor = $request->tenor;
        $mysaving->expiry = Carbon::now()->addDays($request->tenor);
        $mysaving->save();
        Session::flash('message', 'Great Job!! You have successfully created your savings.');
        return view('savings');
    }

    public function requestCashout(Request $request)
    {
        $cashout = Cashout::firstOrNew(['user_id' => Auth::user()->id, 'status' => '0', 'mysaving_id' => $request->saving]);
        $cashout->user_id = Auth::user()->id;
        $cashout->amount = $this->tofloat($request->amount);
        $cashout->mysaving_id = $request->saving;
        $cashout->status = "0";
        $cashout->save();
        Session::flash('message', 'Cash Out Request Received, We Will Be In Touch.');
        return redirect::to('savings');
    }
}
