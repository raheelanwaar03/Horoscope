@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Select</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($images as $image)
                                            <tr>
                                                <td>{{ $image->name }}</td>
                                                <td>{{ $image->email }}</td>
                                                <td>{{ $image->status == 1 ? 'yes' : 'No' }}</td>
                                                <td><img src="{{ asset('image/'.$image->image) }}" class="img-fluid" height="80px" width="80px"></td>
                                                <td>{{ $image->created_at }}</td>
                                                <td><a href="{{ route('Admin.Select.Image',['id'=>$image->id]) }}" class="btn btn-sm btn-success">Select</a>
                                                <a href="{{ route('Admin.UnSelect.Image',['id'=>$image->id]) }}" class="btn btn-sm btn-danger">UnSelect</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Date</th>
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
