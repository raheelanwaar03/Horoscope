@extends('layouts.app')

@section('content')
    <div id="appCapsule">


        <div class="section full mt-4" style="background-color: yellow !important; ">

            <div class="col-12" style="margin-top:10px;">
                <div class="blog-card"
                    style="border: 1px solid white; border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: yellow !important;">
                    <p class="card-text" style="font-size: 11px;margin-top: 20px;">
                    <div class="row">
                        <div class="col-7">
                            <p style="color: black;padding-left: 5px;">Deposit Cash</p>
                            <p style="color: black;padding-left: 5px;margin-top: -15px;font-size: 10px;">Available
                                Balance</p>
                            <h2 style="color: black;padding-left: 5px;margin-top: -15px;font-weight: bold;">$
                                {{ auth()->user()->balance }}
                            </h2>
                        </div>
                        <div class="col-5">
                            {{-- <p style="color: black;padding-left: 5px;font-size: 12px;"> <i class="fa fa-money"></i> My
                            Rewards</p> --}}
                            <a href="{{ route('User.Widthraw.Balance') }}">
                                <p
                                    style="color: black;margin-top: -10px;font-size: 10px;border: 1px solid #fff;border-radius: 20px;text-align: center;">
                                    Widthraw</p>
                            </a>
                            <a href="{{ route('User.Deposit.View') }}">
                                <p
                                    style="color: black;padding: 4px 25px !important;margin-top: -10px;font-size: 10px;background-color: red;border-radius: 20px;text-align: center;">
                                    Add Cash</p>
                            </a>
                        </div>

                    </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="section full mb-3">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Deposit Section - Chat with us for help</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('User.Store.Deposit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Amount</label>
                                        <input type="number" name="amount" placeholder="Enter Amount you want to depoist"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Account Title</label>
                                        <input type="text" name="name" placeholder="Enter your account title"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">TrxId</label>
                                        <input type="number" name="trxId" placeholder="Enter TrxId of your transcation"
                                            class="form-control">
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </center>



    </div>
@endsection
