<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository, $categoryRepository;

    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();
        // return response()->json($products);    
        return view('pages.products.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);
        // dd($product);
        // if (!$product) {
        //     return response()->json(['message' => 'Product not found'], 404);
        // }
        // return response()->json($product);
    
        return view('product-detail', [
            'product' => $product
        ]);
    }

    public function create()
    {
        // $product = $this->productRepository->find($id);
        // dd($product);
        // if (!$product) {
        //     return response()->json(['message' => 'Product not found'], 404);
        // }
        // return response()->json($product);
        // $categories = $this->categoryRepository->all();
        $categories = Category::get();
        return view('pages.products.create',[
            'categories'=> $categories
        ]);
    }

    public function store(Request $request){
        // dd($request);
        try {
            $product = $this->productRepository->create($request);
            return redirect()->route('product.index')->with('success', 'Product created successfully.');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    
    public function destroy(Product $product)
    {
        try {
            $product = $this->productRepository->destroy($product);
            return redirect()->route('product.index')->with('success', 'Product deleted successfully');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    
}
