<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tags;
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
        $products = $this->productRepository->mine();
        // return response()->json($products);    
        return view('pages.products.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);
        $categories = Category::get();
        $tags = Tags::get();
    
        return view('product-detail', [
            'product' => $product,
            'categories'=> $categories,
            'tags'=> $tags
        ]);
    }

    public function create()
    {
        
        $categories = Category::get();
        $tags = Tags::get();
        return view('pages.products.create',[
            'categories'=> $categories,
            'tags'=> $tags
        ]);
    }

    public function store(Request $request){
        try {
            $this->productRepository->create($request);
            session()->flash('success', 'Uploaded successfully.');
            return redirect()->route('product.index');
        } catch (\Throwable $th) {
            // dd($th);
            session()->flash('error', 'Oops, Failed: ' . $th->getMessage());
            return redirect()->back();
        }
    }
    
    public function destroy(Product $product)
    {
        try {
            $product = $this->productRepository->destroy($product);
            
            session()->flash('success', 'Product deleted successfully.');
            return redirect()->back();
        } catch (\Throwable $th) {
            // dd($th);
            session()->flash('error', 'Oops, Failed: ' . $th->getMessage());
            return redirect()->back();
        }
    }
    
}
