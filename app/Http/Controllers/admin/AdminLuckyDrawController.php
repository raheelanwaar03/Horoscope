<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OneRupeeProducts;
use App\Models\Winner;
use Illuminate\Http\Request;

class AdminLuckyDrawController extends Controller
{
    public function add()
    {
        return  view('admin.luck.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,99999) .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'),$imageName);

        $lucky = new OneRupeeProducts();
        $lucky->title = $validated['title'];
        $lucky->price = $validated['price'];
        $lucky->image = $imageName;
        $lucky->save();
        return redirect()->back()->with('success','Product added successfully');
    }
    
    public function allItems()
    {
        $items = OneRupeeProducts::get();
        return view('admin.luck.all',compact('items'));
    }
    
    
    public function deleteItems($id)
    {
        $item = OneRupeeProducts::find($id);
        $item->delete();
        return redirect()->back()->with('success','Item deleted successfully');
    }
    
    
    public function allWinners()
    {
       $items = Winner::get();
        return view('admin.luck.allWinner',compact('items'));
    }
    
    
    public function deleteWinner($id)
    {
        $item = Winner::find($id);
        $item->delete();
        return redirect()->back()->with('success','Winner deleted successfully');
    }
    
    
    

}
