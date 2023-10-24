<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Horoscope;
use App\Models\marketImages;
use App\Models\Marketplace;
use App\Models\Winner;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function add()
    {
        $images = marketImages::get();
        return view('admin.marketplace.add',compact('images'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,99999) .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'),$imageName);


        $image = new Marketplace();
        $image->name = $validated['name'];
        $image->image = $imageName;
        $image->save();
        return redirect()->back()->with('success','Image added successfully');

    }

    public function horoscope()
    {
        return view('admin.Horoscope.add');
    }


    public function storeHoroscope(Request $request)
    {
        $validated = $request->validate([
            'sign' => 'required',
            'month' => 'required',
            'description' => 'required',
            'image' => 'required',
            'today_image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,99999) .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'),$imageName);
        
        // Today sign image
        
        $image = $validated['today_image'];
        $today_image = rand(11111,99999) .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'),$today_image);


        $horoscope = new Horoscope();
        $horoscope->sign = $validated['sign'];
        $horoscope->month = $validated['month'];
        $horoscope->description = $validated['description'];
        $horoscope->image = $imageName;
        $horoscope->today_image = $today_image;
        $horoscope->save();
        return redirect()->back()->with('success','Added Successfully');
    }

    public function allHoroscope()
    {
        $horoscope = Horoscope::get();
        return view('admin.Horoscope.all',compact('horoscope'));
    }

    public function detailsHoroscope($id)
    {
        $horoscope = Horoscope::find($id);
        return view('admin.Horoscope.edit',compact('horoscope'));
    }

    public function updateHoroscope(Request $request,$id)
    {
        $horoscope = Horoscope::find($id);

        if ($request->has('image')) {
            $image = $request['image'];
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $horoscope->image = $imageName;
        }
        if ($request->has('today_image')) {
            $image = $request['image'];
            $today_image = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $today_image);
            $horoscope->image = $today_image;
        }
        $horoscope->sign = $request->sign;
        $horoscope->description = $request->description;
        $horoscope->month = $request->month;
        $horoscope->save();
        return redirect()->back()->with('success','updated successfully');
    }
    
    public function winner()
    {
        return view('admin.luck.luckyWinner');
    }
    
    public function storeWinner(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,99999) .'.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'),$imageName);


        $image = new Winner();
        $image->name = $validated['name'];
        $image->image = $imageName;
        $image->save();
        return redirect()->back()->with('success','Image added successfully');
    }
    
    public function select($id)
    {
     $image = marketImages::find($id);
     $image->status = 1;
     $image->save();
     return redirect()->back()->with('success','This image will show in slider now');
        
    }
    
    public function UnSelect($id)
    {
     $image = marketImages::find($id);
     $image->status = 0;
     $image->save();
     return redirect()->back()->with('success','This image will not show in slider now');
        
    }




}
