<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->paginate(5);
     Return view('products.index',['products'=>$products]);
    }
    public function create(){
        return view('products.create');
    }
    public function  store(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'Institute'=>'required',
            'Location'=>'required',
            'startDate'=>'required|date',
            'endDate'=>'required|date',
            'approvalStatus'=>'required',
            'iraRequired'=>'required',
        ]);
        $product=new Product;
        $product->name=$request->name;
        $product->Institute=$request->Institute;
        $product->Location=$request->Location;
        $product->startDate=$request->startDate;
        $product->endDate=$request->endDate;
        $product->approvalStatus=$request->approvalStatus;
        $product->iraRequired=$request->iraRequired;
        $product->save();
        return back()->withSuccess('Event Added Successfully...');
    }
    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]
    );
    }
    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]
    );
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'Institute'=>'required',
            'Location'=>'required',
            'startDate'=>'required|date',
            'endDate'=>'required|date',
            'approvalStatus'=>'required',
            'iraRequired'=>'required',
        ]);
        $product=Product::where('id',$id)->first();
        $product->name=$request->name;
        $product->Institute=$request->Institute;
        $product->Location=$request->Location;
        $product->startDate=$request->startDate;
        $product->endDate=$request->endDate;
        $product->approvalStatus=$request->approvalStatus;
        $product->iraRequired=$request->iraRequired;
        $product->save();
        return back()->withSuccess('Event Details Updated Successfully...');
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Event Deleted Successfully...');

    }
}

