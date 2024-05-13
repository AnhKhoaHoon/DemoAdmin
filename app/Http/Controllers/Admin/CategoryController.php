<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function CreateCategory()
    {
        $data_ca = Category::latest()->get(); //ghi du lieu ra
        return view('admin.category.create', compact('data_ca'));
    }
    public function StoreCategory(StoreRequest $request)
    {
        $data_ca = new Category();
        $data_ca->category_name = $request->category_name;
        $data_ca->save();

        $notification = array(
            'message' => 'Category created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.index.category')->with($notification);
    }
    public function IndexCategory()
    {
        $data_index = Category::latest()->get();
        return view('admin.category.index', compact('data_index'));
    }
    public function EditCategory($id)
    {
        $data_edit_ca = Category::findOrFail($id);
        return view('admin.category.edit', compact('data_edit_ca'));
    }
    public function UpdateCategory(Request $request)
    {
        $id = $request->id;
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,

            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'Success'
        );
        return redirect()->route('admin.index.category')->with($notification);
    }
    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'Success'
        );
        return redirect()->route('admin.index.category')->with($notification);
    }
}
