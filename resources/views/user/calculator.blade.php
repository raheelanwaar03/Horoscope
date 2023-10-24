@extends('layouts.app')

@section('content')
    <div id="appCapsule">


        <div class="section full mt-4">

            @foreach ($plans as $plan)
                <div class="col-12" style="margin-top:20px;">
                    <div class="blog-card"
                        style="border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: #e2e244f5 !important;">
                        <p class="card-text" style="font-size: 11px">
                        <h2 style="color: black;padding-left: 5px;text-align:center;">{{ $plan->plan_name }}</h2>
                        <p style="color: black;padding-left: 5px;">Profit Calculator</p>
                        <p style="color: black;padding-left: 5px;">Calculate how much profit you can earn</p>
                        <hr>
                        <div class="row">
                            <div class="col-7">

                                <h3>How much will I earn?</h3>

                                <div class="d-flex justify-content-between">
                                    <h4>Daily Profit</h4>
                                    <h4>0.96$</h4>
                                </div>
                                <hr>

                                <div class="d-flex justify-content-between">
                                    <h4>Monthly Profit</h4>
                                    <h4>29.17$</h4>
                                </div>
                                <hr>

                                <div class="d-flex justify-content-between">
                                    <h4>Yearly Profit</h4>
                                    <h4>350$</h4>
                                </div>
                                <hr>

                                <div class="d-flex justify-content-between">
                                    <h4>Annual Profit</h4>
                                    <h4>7.0%</h4>
                                </div>
                            </div>

                        </div>

                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
