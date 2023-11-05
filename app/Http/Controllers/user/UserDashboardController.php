<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Horoscope;
use App\Models\Marketplace;
use App\Models\OneRupeeProducts;
use App\Models\Plans;
use App\Models\User;
use App\Models\Winner;
use App\Models\UserDeposit;
use App\Models\UserInvest;
use App\Models\UserPlans;
use App\Models\marketImages;
use App\Models\UserWidthraw;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function index()
    {
        return view('user.dashboard');
    }

    public function referral()
    {
        $referral = User::where('referral', auth()->user()->email)->get();
        return view('user.promational', compact('referral'));
    }

    public function deposit()
    {
        return view('user.account.deposit');
    }

    public function storeDeposit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'trxId' => 'required',
        ]);

        $deposit = new UserDeposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->name = $validated['name'];
        $deposit->amount = $validated['amount'];
        $deposit->trxId = $validated['trxId'];
        $deposit->save();
        return redirect()->back()->with('success', 'You have requested for deposit successfully');
    }

    public function plans()
    {
        $plans = Plans::get();
        return view('user.plans', compact('plans'));
    }

    public function buyPlan(Request $request, $id)
    {
        $plan = Plans::find($id);
        $plan_price = $plan->plan_price;

        if ($plan_price > auth()->user()->balance) {
            return redirect()->route('User.Deposit.View')->with('error', 'You have not enough balance');
        }

        //    user balance deduction
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance -= $plan_price;
        $user->save();

        $buy_plan = new UserPlans();
        $buy_plan->user_id = auth()->user()->id;
        $buy_plan->plan_id = $id;
        $buy_plan->save();
        return redirect()->back()->with('success', 'You have Subscribe this package successfully');
    }

    public function widthraw()
    {
        return view('user.account.widthraw');
    }

    public function storeWidthraw(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'trc20' => 'required',
        ]);

        if ($validated['amount'] > auth()->user()->balance) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }

        if ($validated['amount'] < 50) {
            return redirect()->back()->with('error', 'Minimum widthrawal Limite is 50$');
        }

        $widthraw = new UserWidthraw();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->name = $validated['name'];
        $widthraw->amount = $validated['amount'];
        $widthraw->trc20 = $validated['trc20'];
        $widthraw->save();
        return redirect()->back()->with('success', 'You have successfully requested for widthraw');
    }

    public function oneRupee()
    {
        $items = OneRupeeProducts::get();
        $winner = Winner::get();
        return view('user.oneRupee', compact('items', 'winner'));
    }


    public function buyOneRupee(Request $request, $id)
    {
        $item = OneRupeeProducts::find($id);
        $item_price = $item->price;
        $total_price = $item_price * $request->qty;
        if ($total_price > auth()->user()->balance) {
            return redirect()->back()->with('error', 'you have not enough balance');
        }

        // deducted amount from user account
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance -= $total_price;
        $user->save();

        $invested = new UserInvest();
        $invested->user_id = auth()->user()->id;
        $invested->product_id = $id;
        $invested->save();
        return redirect()->back()->with('success', 'You have purchased this product successfully');
    }

    public function profile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('user.profile', compact('user'));
    }

    public function calculator($id)
    {
        $plan = Plans::find($id);
        return view('user.calculator', compact('plan'));
    }

    public function picture()
    {
        $images = marketImages::where('status', '1')->get();
        return view('user.pictures', compact('images'));
    }

    public function birthDate(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        if (auth()->user()->balance <= 0) {
            return redirect()->route('User.Deposit.View')->with('error', 'You have not enough balance to open this page. One dollar is fees to open this page');
        }
        $user->balance -= 1;
        $user->save();
        $month = $request->month;
        $horoscope = Horoscope::where('month', $month)->first();
        return view('user.star', compact('horoscope'));
    }

    public function store_picture(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image'), $imageName);

        $market_img = new marketImages();
        $market_img->name = auth()->user()->name;
        $market_img->email = auth()->user()->email;
        $market_img->image = $imageName;
        $market_img->save();
        return redirect()->route('User.Dashboard')->with('success', 'Your image added successfully');
    }

    public function stars()
    {
        $user = User::where('id', auth()->user()->id)->first();
        if (auth()->user()->balance <= 0) {
            return redirect()->route('User.Deposit.View')->with('error', 'You have not enough balance to open this page. One dollar is fees to open this page');
        }
        $user->balance -= 1;
        $user->save();
        $horosope = Horoscope::get();
        return view('user.star', compact('horosope'));
    }


    public function images()
    {
        $images = marketImages::where('status', '1')->get();
        return view('images', compact('images'));
    }
}
