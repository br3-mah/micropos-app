<?php
namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\ProductVariation;

class ProductRepository
{
    public function four(){
        return Product::orderBy('created_at', 'desc')->limit(4)->get();
    }
    public function all(){
        return Product::orderBy('created_at', 'desc')->get();
    }
    public function mine(){
        return Product::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
    }
    public function search($data){
        return Product::orWhere('name', 'LIKE', '%'.$data['s'].'%')
                ->orWhere('description', 'LIKE', '%'.$data['s'])
                ->orderBy('created_at', 'desc')->get();
    }

    public function find($id){
        return Product::find($id);
    }
    public function create($request){
        // dd($request);
        /// >>> Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'status' => 'nullable',
            'user_id' => 'nullable',
            'disc_type' => 'nullable|string',
            'fixed_price' => 'nullable|numeric',
            'tax_class' => 'nullable|string',
            'vat' => 'nullable|numeric',
            'sku' => 'nullable|string',
            'barcode' => 'nullable|string',
            'shelf_qty' => 'nullable|numeric',
            'warehouse_qty' => 'nullable|numeric',
            'allow_backorder' => 'nullable',
            'weight' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'meta_title' => 'nullable',
            'meta_keywords' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Adjust the file validation rules as needed
        ]);


        /// >>> Create the product with the validated data
        $product = Product::create($validatedData);
        // dd($product);
        /// >>> Store Variations
        foreach ($request->input('kt_ecommerce_add_product_options') as $option) {
            ProductVariation::created([
                "option" => $option['product_option'],
                "value" => $option['product_option_value'],
                "product_id" => $product->id
            ]);
        }

        /// >>> Store Categories
        // foreach ($request->input('categories') as $key => $option) {
        //     ProductCategory::created([
        //         'category_id' => $option[$key],
        //         "product_id" => $product->id
        //     ]);
        // }

        // /// >>> Store Tags
        // foreach ($request->input('tags') as $option) {
        //     ProductTag::created([
        //         'tag_id' => $option[$key],
        //         "product_id" => $product->id
        //     ]);
        // }
    
        /// >>> Handle file upload (if an avatar is provided)
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('products/avatars', 'public');
            $validatedData['image'] = $avatarPath;
        }
        if ($request->hasFile('pic1')) {
            $pic1 = $request->file('pic1')->store('products/extras', 'public');
            ProductImage::created([ 
                'path'=> $pic1,
                'status'=> 1,
                'product_id'=> $product->id
            ]);
        }
        if ($request->hasFile('pic2')) {
            $pic2 = $request->file('pic2')->store('products/extras', 'public');
            ProductImage::created([ 
                'path'=> $pic2,
                'status'=> 1,
                'product_id'=> $product->id
            ]);
        }
        if ($request->hasFile('pic3')) {
            $pic3 = $request->file('pic3')->store('products/extras', 'public');
            ProductImage::created([ 
                'path'=> $pic3,
                'status'=> 1,
                'product_id'=> $product->id
            ]);
        }
        if ($request->hasFile('pic4')) {
            $pic4 = $request->file('pic4')->store('products/extras', 'public');
            ProductImage::created([ 
                'path'=> $pic4,
                'status'=> 1,
                'product_id'=> $product->id
            ]);
        }
        if ($request->hasFile('pic5')) {
            $pic5 = $request->file('pic5')->store('products/extras', 'public');
            ProductImage::created([ 
                'path'=> $pic5,
                'status'=> 1,
                'product_id'=> $product->id
            ]);
        }
    
        // Send a Notification to Product Owner
        
    }

    public function createVariant($product){}

    public function destroy($product){
        // Implement any logic to check if the user is authorized to delete the product.
        
        // Delete the product
        $product->delete();

        // Redirect to the product list page or any other appropriate page.
        return true;
    }

    
}