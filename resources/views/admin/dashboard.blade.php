@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Total Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">2</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Pending Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ pendingUser() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Approved Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ approvedUsers() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Rejected Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ rejectedUsers() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet org">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Total Investment</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">${{ investment() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Widthrawal Amount</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">${{ widthrawal() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endsection
