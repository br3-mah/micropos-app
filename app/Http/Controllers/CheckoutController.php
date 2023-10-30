<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmation;
use App\Mail\OrderReport;
use App\Repositories\CartRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    private $orderRepository, $cartRepository;

    public function __construct(
        OrderRepository $orderRepository,
        CartRepository $cartRepository
    ){
        $this->orderRepository = $orderRepository;
        $this->cartRepository = $cartRepository;
    }
    
    public function index(){
        return view('check-out');
    }

    public function store(Request $request){
        try {
            $cartData = json_decode(request('cartData'), true);
            
            // Check if the decoding was successful
            if (json_last_error() === JSON_ERROR_NONE) {
                // $cartData now contains the decoded cart data as an associative array
                $order = $this->orderRepository->create($request->toArray());
                // To loop through all items:
                foreach ($cartData as $itemId => $item) {
                    
                    // Save it to a orders
                    $this->orderRepository->createItems($item, $order->id);
                }
                if(auth()->check()){
                    Mail::to(auth()->user()->email)->send(new OrderConfirmation($order->toArray(), $cartData ));
                }else{
                    Mail::to($request->input('billing_email'))->send(new OrderConfirmation($order->toArray(), $cartData ));
                }
        
                Mail::to(['nyeleti.bremah@gmail.com','georgemunganga@gmail.com'])->send(new OrderReport($order->toArray(), $cartData ));
                return response()->json(['data' => $order], 200);
            } else {
                // Handle JSON decoding error
                // You may want to log the error or provide a response to the user
                // The JSON data may be invalid or corrupted
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function singlePurchase(Request $request){
       return redirect()->route('checkout.index');
    }

}
