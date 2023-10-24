@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Horoscope Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Sign</th>
                                            <th>Description</th>
                                            <th>Month</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($horoscope as $user)
                                            <tr>
                                                <td>{{ $user->sign }}</td>
                                                <td>{{ $user->description }}</td>
                                                <td>{{ $user->month }}</td>
                                                <td><img src="{{ asset('image/' . $user->image) }}" class="img-fluid"
                                                        height="80px" width="80px" alt="Image"></td>
                                                <td>
                                                    <a href="{{ route('Admin.Details.Of.Horoscope', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sign</th>
                                            <th>Description</th>
                                            <th>Month</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
