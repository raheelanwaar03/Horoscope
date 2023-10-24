@extends('layouts.app')

@section('content')
    <div id="appCapsule">
        <div class="section full mt-4" style="background-color: yellow !important; ">
            <div class="col-12" style="margin-top:10px;">
                <div class="blog-card"
                    style="border: 1px solid black; border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: yellow !important;">
                    <p class="card-text" style="font-size: 11px;margin-top: 20px;">
                    <div class="row">
                        <div class="col-7">
                            <p style="color: black;padding-left: 5px;">Welcome to clip app</p>
                            <p style="color: black;padding-left: 5px;margin-top: -15px;font-size: 10px;">Available
                                Balance</p>
                            @if (auth()->user())
                                <h2 style="color: black;padding-left: 5px;margin-top: -15px;font-weight: bold;">$
                                    {{ auth()->user()->balance }}
                                </h2>
                            @else
                                <h2 style="color: black;padding-left: 5px;margin-top: -15px;font-weight: bold;">$
                                    0.00
                                </h2>
                            @endif
                        </div>
                        <div class="col-5">
                            <a href="{{ route('User.Widthraw.Balance') }}">
                                <p
                                    style="background-color: red;padding: 4px 25px !important;color: white;margin-top: -10px;font-size: 10px;border: 1px solid #fff;border-radius: 20px;text-align: center;">
                                    Widthraw</p>
                            </a>
                            <a href="{{ route('User.Deposit.View') }}">
                                <p
                                    style="color: white;padding: 4px 25px !important;margin-top: -10px;font-size: 10px;background-color: red;border-radius: 20px;text-align: center;">
                                    Add Cash</p>
                            </a>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
