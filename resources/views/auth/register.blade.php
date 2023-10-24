<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication | Register</title>
</head>

<body style="background-color:yellow">

    <x-alert />

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color:black">Register</h1>
            </div>
        </div>
        <div class="row" style="height: 540px;">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Name</b></label>
                                <input type="text" style="background: transparent;" name="name"
                                    class="form-control" placeholder="Enter Your Name">
                            </div>
                            <span>
                            </span>
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Email</b></label>
                                <input type="email" style="background: transparent;" name="email"
                                    class="form-control" placeholder="Enter Your Email">
                            </div>
                            <span>
                            </span>
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Password</b></label>
                                <input type="password" style="background: transparent;" name="password"
                                    class="form-control" placeholder="Enter Your Password">
                            </div>

                            {{-- referral --}}

                            <input type="hidden" name="referral" value="{{ $referral }}">

                            <span>
                            </span>
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Confirm Password</b></label>
                                <input type="password" style="background: transparent;" name="password_confirmation"
                                    class="form-control" placeholder="Confirm Password">
                            </div>
                            <span>
                            </span>
                            <button type="submit" class="btn btn-warning text-white">Register</button>
                            <a href="{{ route('login') }}" class="btn btn-outline-warning" style="color:black">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color:black">Already have account!<span><a href="{{ route('login') }}"
                            style="text-decoration: none;" class="btn btn-light text-success btn-lg">Login</a></span>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>
