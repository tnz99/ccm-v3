<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class DonationsController extends Controller
{
    public function international(Request $request): View | RedirectResponse {
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
                  "value" => 10
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
        
        if($user->isDonar()) {
            return view('donations.international');
        } else {
            return redirect('/');
        }
    }

    public function success(Request $request): View | RedirectResponse {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            $amount = $response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'];
        }

        return redirect()->route('pages.home')->with('success', 'Thank you. Donation Successful.');
    }

    public function cancel(Request $request): View | RedirectResponse {
        return redirect()->route('pages.home');
    }

    public function local(Request $request): View | RedirectResponse {
        $user = auth()->user();

        if($user->isDonar()) {
            return view('donations.local');
        } else {
            return redirect('/');
        }
    }

    public function history(Request $request): View |  RedirectResponse {
        $user = auth()->user();

        $records = [
            ['date' => '2024-05-01', 'amount' => 100],
            ['date' => '2024-05-02', 'amount' => 150],
            ['date' => '2024-05-03', 'amount' => 200],
        ];

        if($user->isDonar()) {
            return view('donations.history')->with(['records' => $records]);
        } else {
            return redirect('/');
        }
    }
}
