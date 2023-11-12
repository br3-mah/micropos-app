<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tags;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ShopProductController extends Controller
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->all();
        $categories = Category::get();
        $tags = Tags::get();
        
        return view('shop', [
            'products' => $products,
            'categories'=> $categories,
            'tags'=> $tags
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $products = $this->productRepository->search($request->toArray());
        $categories = Category::get();
        $tags = Tags::get();
        return view('shop-result', [
            'products'=>$products,
            'categories'=> $categories,
            'tags'=> $tags
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
