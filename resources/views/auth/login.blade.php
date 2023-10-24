<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication | Login</title>
</head>

<body style="background-color:yellow">
    <x-alert />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color:black">Login</h1>
            </div>
        </div>
        <div class="row" style="height: 540px;">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Email</b></label>
                                <input type="text" style="background: transparent;" name="email"
                                    class="form-control" placeholder="Enter Your Email">
                            </div>
                            <span>
                            </span>
                            <div class="form-group">
                                <label style="color:black"><b style="font-size: 25px">Password</b></label>
                                <input type="password" style="background: transparent;" name="password"
                                    class="form-control" placeholder="Enter Your Password">
                            </div>
                            <span>
                            </span>
                            <button type="submit" class="btn btn-warning text-white">Login</button>
                            <a href="#"
                                class="btn btn-outline-warning" style="color:black">Reset Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color:black">Have not register yet?<span><a href="{{ route('register') }}"
                            style="text-decoration: none;" class="btn btn-light text-success btn-lg">Register
                            Now!</a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
