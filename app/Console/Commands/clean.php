<?php

namespace App\Console\Commands;

use App\Models\OneRupeeProducts;
use App\Models\Plans;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');


        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = 0;
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'User';
        $user->referral = 'default';
        $user->balance = 10;
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

        // Adding plans

        $plan = new Plans();
        $plan->plan_name = 'Silver';
        $plan->profit_rate = '25';
        $plan->plan_price = '100';
        $plan->save();

        $plan = new Plans();
        $plan->plan_name = 'Gold';
        $plan->profit_rate = '50';
        $plan->plan_price = '500';
        $plan->save();

        $plan = new Plans();
        $plan->plan_name = 'Diamond';
        $plan->profit_rate = '100';
        $plan->plan_price = '1000';
        $plan->save();

    }
}
