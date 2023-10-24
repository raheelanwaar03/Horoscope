@extends('layouts.app')

@section('content')
    <div id="appCapsule">


        <div class="section full mt-4">

            @foreach ($plans as $plan)
                <div class="col-12" style="margin-top:20px;">
                    <div class="blog-card"
                        style="border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: #e2e244f5 !important;">
                        <p class="card-text" style="font-size: 11px;margin-top: 2px;">
                        <p style="color: black;padding-left: 5px;">{{ $plan->plan_name }}</p>
                        <hr>
                        <div class="row">
                            <div class="col-7">
                                <p style="color: black;padding-left: 5px;">Profit Rate</p>
                                <p style="color: black;padding-left: 5px;margin-top: -15px;font-size: 10px;">
                                    {{ $plan->profit_rate }} % (Per
                                    Year)</p>
                                {{-- <p style="color: black;padding-left: 5px;margin-top: -15px;font-size: 10px;">Maintain
                            Minimum Balance</p> --}}
                                <h4 style="color: black;padding-left: 5px;margin-top: -15px;font-weight: bold;">
                                    {{ $plan->plan_price }}$</h4>
                            </div>
                            <div class="col-5">
                                <br><br>
                                <form action="{{ route('User.Buy.Plan', ['id' => $plan->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning mb-2 px-3">
                                        Subscribe
                                    </button>
                                </form>
                                <a href="{{ route('User.Plans.calculator') }}" class="btn btn-danger px-3">
                                    Calculator</a>
                            </div>

                        </div>

                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
