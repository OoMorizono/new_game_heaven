<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Customer;
use Stripe＼Stripe;
use Stripe＼Customer;
use Stripe＼Charge;

class StripePaymentsController extends Controller
{
    public function index()
    {
        return view('pay.index');
    }

    public function payment(Request $request)
    {
        try{
            Stripe::setApiKey('STRIPE_SECRET');

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
                            ));
                            $charge = Charge::create(array(
                                'customer' => $customer->id,
                                'amount' => 2000,
                                'currency' => 'jpy'
                            ));

        return redirect()->route('complete');
        }
        catch(\Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function complete()
    {
        return view('complete');
    }
}
