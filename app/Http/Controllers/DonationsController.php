<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

use App\Models\Donation;

class DonationsController extends Controller
{
    public function international(Request $request): View | RedirectResponse {
        if($request->isMethod('post')) {
            $user = auth()->user();

            $provider = new PayPalClient();
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();

            $response = $provider->createOrder([
                "intent" =>  "CAPTURE",
                "application_context" => [
                    "return_url" => route('donations.success'),
                    "cancel_url" => route('donations.cancel')
                ],
                "purchase_units" => [
                [
                    "amount" => [
                    "currency_code" => "USD",
                    "value" => $request->amount
                    ]
                ]
                ]
            ], true);

            // dd($response);

            if(isset($response['id']) && $response['id'] != null) {
                foreach($response['links'] as $link) {
                    if($link['rel'] == 'approve') {
                        // session()->put('product_name', 'Donation');
                        session()->put('amount', $request->amount);
                        return redirect()->away($link['href']);
                    }
                }
            }
        } else {
            return view('donations.international');
        }
        
    }

    public function success(Request $request): View | RedirectResponse {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            $amount = $response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'];
            
            $donation = new Donation();
            $donation->amount = $amount;
            $donation->user_id = auth()->user()->id;
            $donation->save();
        }

        return redirect()->route('pages.home')->with('success', 'Thank you. Donation Successful.');
    }

    public function cancel(Request $request): View | RedirectResponse {
        return redirect()->route('pages.home');
    }

    public function local(Request $request): View | RedirectResponse {
        // $user = auth()->user();

        // if($user->isDonar()) {
            return view('donations.local');
        // } else {
            // return redirect('/');
        // }
    }

    public function saveLocal(Request $request) {
        $user = auth()->user();

        $donation = new Donation();
        $donation->amount = $request->amount;
        $donation->journal_number = $request->journal_number;
        $donation->user_id = auth()->user()->id;
        $donation->save();

        return redirect()->back()->with('success', 'Thanks for donating');
    }

    public function history(Request $request): View |  RedirectResponse {
        $user = auth()->user();

        if($user->isDonar()) {
            $records = $user->donations;
            return view('donations.history')->with(['records' => $records]);
        } else {

            return view('donations.admin-history')->with(['records' => Donation::whereNot('user_id', null)->get()]);
        }
    }
}
