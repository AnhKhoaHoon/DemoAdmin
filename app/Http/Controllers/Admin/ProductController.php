<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    public function CreateProduct()
    {
        $data = Category::get(); //ghi du lieu ra
        return view('admin.product.create', compact('data'));
    }
    public function StoreProduct(Request $request)
    {
        
      
       
        $data_store = new Product();
        $data_store->name = $request->name;
        $data_store->category_id = $request->category_id;
        $data_store->price = $request->price;
        $data_store->status = $request->status;
        $data_store->save();

        $notification = array(
            'message' => 'Product Created Successfully',
            'alert-type' => 'Success',
        );
        return redirect()->route('admin.index.product')->with($notification);
    }
    public function IndexProduct()
    {
        $data_index = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.name', 'products.price', 'products.status', 'categories.category_name', 'products.id')->get();
        return view('admin.product.index', compact('data_index'));
    }
    public function EditProduct($id)
    {
        $data_edit = Product::findOrFail($id);
        return view('admin.product.edit', compact('data_edit'));
    }
    public function UpdateProduct(Request $request)
    {
        $id = $request->id;
        Product::findOrFail($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'Success'
        );
        return redirect()->route('admin.index.product')->with($notification);
    }
    public function DeleteProduct($id)
    {
        Product::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'Success'
        );
        return redirect()->route('admin.index.product')->with($notification);
    }
}
