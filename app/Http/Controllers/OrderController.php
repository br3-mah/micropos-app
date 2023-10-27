<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{    
    
    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::get();
        // return response()->json($products);    
        return view('pages.orders.index', [
            'orders' => $orders
        ]);   
    }
    public function summary($id)
    {
        $total = 0;
        $order = Order::where('id', $id)->first();
        $order_items = OrderItem::where('order_id', $id)->get();
        foreach ($order_items as $key => $item) {
            $total += (float)$item['price'] * (int)$item['qty'];
        }
        return view('order-status',[
            'order' => $order->toArray(),
            'order_items' => $order_items->toArray(),
            'total' => $total
        ]);
    }

    public function customers(){  
        
        $orders = $this->orderRepository->customers();
        return view('pages.orders.customers', [
            'orders' => $orders
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
