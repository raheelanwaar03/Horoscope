@extends('layouts.app')
@section('content')
<div id="appCapsule">
    <div class="section full mt-4">
        <div class="col-12" style="margin-top:20px;">

            <div class="row">
                @foreach ($items as $item)
                    <div class="col-6" style="margin-top:20px;">
                        <div class="blog-card"
                            style="border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: yellow !important;">

                            <div class="col-12">
                                <center>
                                    <img src="{{ asset('image/'.$item->image) }}" alt="image" width="100px"
                                        height="100px">
                                </center>
                            </div>
                            <div class="col-12">
                                <center>
                                    <p style="color: #000;padding-left: 5px;margin-top: -5px;font-size: 10px;">
                                        {{ $item->title }}</p>
                                    <p style="color: #000;padding-left: 5px;margin-top: -20px;font-size: 10px;">
                                        {{ $item->price }}$
                                    </p>
                                    <form action="{{ route('User.One.Rupee.Buy', ['id' => $item->id]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit"
                                            style="color: black;padding: 2px 25px !important;margin-top: -20px;font-size: 10px;background-color: red;border-radius: 20px;text-align: center;border:1px solid white">
                                            Purchase
                                        </button>
                                    </form>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($winner as $item)
                    <div class="col-6" style="margin-top:20px;">
                        <div class="blog-card"
                            style="border-radius: 10px !important;padding: 2px;margin-bottom: 6px;background-color: yellow !important;">

                            <div class="col-12">
                                <center>
                                    <img src="{{ asset('image/'.$item->image) }}" alt="image" width="100px"
                                        height="100px">
                                </center>
                            </div>
                            <div class="col-12">
                                <center>
                                    <p style="color: #000;padding-left: 5px;font-size: 30px;">
                                       Today's Winner is {{ $item->name }}
                                    </p>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


</div>
@endsection
