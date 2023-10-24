@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('Admin.Update.Horoscope', ['id' => $horoscope->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Sign</label>
                                        <input type="text" name="sign" class="form-control"
                                            value="{{ $horoscope->sign }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea type="text" name="description" class="form-control" cols="10" rows="10">
                                            {{ $horoscope->description }}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="month">Select Month</label>
                                        <select name="month" value={{ $horoscope->month }} class="form-control" required>
                                            <option style="color:black" value="January">January</option>
                                            <option style="color:black" value="February">February</option>
                                            <option style="color:black" value="March">March</option>
                                            <option style="color:black" value="April">April</option>
                                            <option style="color:black" value="May">May</option>
                                            <option style="color:black" value="June">June</option>
                                            <option style="color:black" value="July">July</option>
                                            <option style="color:black" value="August">August</option>
                                            <option style="color:black" value="September">September</option>
                                            <option style="color:black" value="October">October</option>
                                            <option style="color:black" value="November">November</option>
                                            <option style="color:black" value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="image" name="image" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <img src="{{ asset('image/' . $horoscope->image) }}" alt="imaghe" height="80px"
                                            width="80px" class="img-thumbnail img-fluid">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endsection
