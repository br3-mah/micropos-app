<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class OrderRepository
{
    public function all($data)
    {
        return Order::get();
    }
    public function mine($data)
    {
        return Order::query()->where('id', auth()->user()->id);
    }
    public function create(array $data)
    {
        return Order::create($data);
    }

    public function createItems($data, $id){
        $data['order_id'] = $id;
        return OrderItem::create($data);
    }

    public function update($cart, $data)
    {
        $cart->update($data);
        return $cart;
    }

    public function find($id)
    {
        return Order::find($id);
    }
}