@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Aproved Widthraw</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>TrxID</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date of Registeration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($widthraw_requests as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->trc20 }}</td>
                                                <td>{{ $user->amount }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Approved.Widthraw.Request', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-success">Approve</a>
                                                    <a href="{{ route('Admin.Rejected.Widthraw.Request', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-danger">Reject</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>TrxID</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date of Registeration</th>
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
