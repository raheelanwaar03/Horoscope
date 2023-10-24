@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('Admin.Change.User.Details', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $user->name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $user->email }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Balance</label>
                                        <input type="number" name="balance" class="form-control"
                                            value="{{ $user->balance }}">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Change</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endsection
