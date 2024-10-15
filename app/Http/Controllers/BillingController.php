<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Billing;
use App\Http\Requests\StoreBillingRequest;
use App\Http\Requests\UpdateBillingRequest;
use App\Models\Company;
use App\Models\Subscription;
use Carbon\Carbon;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function plans()
    {
        $plans = Plan::with('features')->get();
        // dd($plans);
        return view('billing.plans',[
            'plans'=>$plans
        ])->layout('layouts.main');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get the current companies current subscription
        $sub = Subscription::with('plan', 'billing')->where('user_id', auth()->user()->id)->where('company_id', Company::currentCompany()->id)->first();
        return view('billing.index',[
            'sub' => $sub
        ])->layout('layouts.main');
    }


    public function payments($planId, $isAnnual){
        // Create innactive subscription and make user subscribed then
        // activate subscription and change user isSuscribed to 1
        if(auth()->user()->isSubscribed == 0){
            // dd($planId, $isAnnual);
            $plan = Plan::find($planId);
            $subscription = Subscription::create([
                'name' => $plan->name,
                'company_id' => Company::currentCompany()->id,
                'plan_id' => $plan->id,
                'user_id' => auth()->user()->id,
                'amount' => $plan->amount, //independent field
                'is_promo' => 0,
                'promo_name' => null,
                'promo_duration' => null,
                'promo_duration_value' => null,
                'promo_code' => null,
                'discount' => 0,
                'status' => 'disabled', //'cancelled, active, disabled, expired' - auto setting
                'cancellation_run_at' => null //date to change status to cancelled
            ]);

            // redirect to payments page with subscriiption id with a success message
            return redirect()->route('subscription.pay', ['subscription_id' => $subscription->id])
            ->with('success', 'Subscription created successfully. Please make payment to activate ZRA '.$plan->name.' subscription for '.Company::currentCompany()->name.'.');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function history()
    {
        return view('billing.history')->layout('layouts.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    public function store($payment_method, $sub_id)
    {
        try {
            // Find the subscription
            $sub = Subscription::find($sub_id);
            if (!$sub) {
                return redirect()->route('billing.index')->with('error', 'Subscription not found.');
            }
        
            // Update the Subscription model status
            $sub->status = 'active';
            $sub->save();
        
            // Calculate the billing dates
            $exp_date = Carbon::now()->addMonth(); // Expiration date: 1 month from now
            $next_billing_at = Carbon::now()->addMonth()->addDays(3); // Next billing: 1 month + 3 days from now
        
            // Create a billing record
            Billing::create([
                'exp_date' => $exp_date,
                'next_billing_at' => $next_billing_at,
                'plan_id' => $sub->plan_id,
                'subscription_id' => $sub->id,
                'user_id' => auth()->user()->id,
                'user_pay_account_id' => 1,
                'amount' => $sub->amount,
                'status' => 'paid',
                'desc' => 'Payment for ' . $sub->name . ' subscription for ' . Company::currentCompany()->name . '.',
            ]);

            //update user isSubscribed to 1
            auth()->user()->isSubscribed = 1;
            auth()->user()->save();

            //update company
            Company::where('id', $sub->company_id)->update([
                'status' => 1
            ]);
            return redirect()->route('billing.index')->with('success', 'Payment and Subscription plan successfully created');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBillingRequest $request, Billing $billing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
