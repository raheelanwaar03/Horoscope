@extends('layouts.app')

@section('content')
    <div id="appCapsule">

        <div class="section full mt-4">
            <div class="col-12" style="margin-top:20px;">
                <div class="form-group round">
                    <div class="input-wrapper">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="label">Click To copy!</label>
                            <button class="btn btn-sm btn-warning mb-2" onclick="copyLink()">copy</button>
                        </div>
                        <input type="text" class="form-control"
                            value="{{ route('register', ['referral' => auth()->user()->email]) }}" id="linkValue">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-12" style="margin-top:20px;">
                @foreach ($referral as $member)
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>{{ $member->name }}</h3>
                        <h4>{{ $member->email }}</h4>
                        <h4>{{ $member->created_at }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
