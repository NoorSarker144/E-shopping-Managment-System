<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $records = Product::all();
        return view('admin.Product.index',compact('records'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'price' => 'required'
        ]);

        $input = $request->all();
        if($file = $request->file('picture')) {
            $image = "images/products/".$file->getClientOriginalName();
            $file->move('images/products/',$image);
            $input['imagePath'] = $image;
        }



        Product::create($input);
        return redirect()->back()->with([
            'success' => 'Product Created.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'price' => 'required'
        ]);

        $input = $request->all();

        if($file = $request->file('image')) {
            $image = "images/products/".$file->getClientOriginalName();
            $file->move('images/products/',$image);
            $input['imagePath'] = $image;
        }

        $record = Product::find($request->id);
        if(file_exists(public_path()."/images/products/".$record->imagePath)) {
            unlink(public_path()."/images/products/".$record->imagePath);
        }

        $record->update($input);

        return redirect()->back()->with([
            'success' => 'Record Updated Successfully.'
        ]);
    }

    public function destroy($id)
    {
        $record = Product::find($id);
        $record->delete();
        return redirect()->back()->with([
            'success' => 'Record Deleted Successfully.'
        ]);
    }
}